package com.codedabble.compiler.controllers;

import java.io.BufferedReader;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.io.InputStreamReader;
import java.nio.file.Path;
import java.nio.file.Paths;
import java.security.Principal;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;
import java.util.Scanner;
import java.util.UUID;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpSession;

import com.codedabble.compiler.models.Code;
import com.codedabble.compiler.models.Result;
import com.fasterxml.jackson.databind.ObjectMapper;

import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.http.HttpHeaders;
import org.springframework.http.ResponseEntity;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestHeader;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.ResponseBody;
import org.springframework.web.bind.annotation.RestController;
import org.springframework.web.context.request.RequestContextHolder;
import org.springframework.web.context.request.ServletRequestAttributes;

@RestController
@CrossOrigin(maxAge = 3600)
public class controller1 {
    UUID uuid = UUID.randomUUID();
    Logger logger = LoggerFactory.getLogger(controller1.class);

    @GetMapping("/")
    public String index(Model model) throws IOException {
        return "index";
    }


    
    @RequestMapping(
        value = "/fetchCode", 
        method = RequestMethod.POST)
    @CrossOrigin
    public ResponseEntity<Code> fetchCode(@RequestParam String fileName,Code payload) throws IOException {
        String out="";
        HttpHeaders headers = new HttpHeaders();
        headers.add("Access-Control-Expose-Headers","Debugbar-Time");
        // headers.add("Access-Control-Allow-Origin","*");
        logger.info("file "+fileName);

        try {
            Path path = Paths.get("").toAbsolutePath();
            File myObj = new File(path.toString()+"/src/main/resources/static/codes/"+fileName+".txt");
            Scanner myReader = new Scanner(myObj);
            while (myReader.hasNextLine()) {
              String data = myReader.nextLine();
              out +=data+"\n";
            }
            payload = new Code(out,fileName);
            myReader.close();
          } catch (FileNotFoundException e) {   
            System.out.println("An error occurred.");
            e.printStackTrace();
          }

        
          return ResponseEntity.accepted().headers(headers).body(payload);
    }
  

    @RequestMapping(
    value = "/runCode", 
    method = RequestMethod.POST)
    @CrossOrigin
    public ResponseEntity<Result> runCode(@RequestBody Code payload,@RequestHeader("X-TOKEN") String token,Result result) throws Exception{
        logger.info("payload "+payload.getCodeBody());
        
        if (token.equals("1234")){
            String out="";
            HttpHeaders headers = new HttpHeaders();
            headers.add("Access-Control-Expose-Headers","Debugbar-Time");

            try {

                Path path = Paths.get("").toAbsolutePath();
                FileWriter myWriter = new FileWriter(path.toString()+"/src/main/resources/static/tmp/"+payload.getClassName()+".java");
                myWriter.write(payload.getCodeBody());
                myWriter.close();
                logger.info("Successfully wrote to the file.");
                ProcessBuilder builder = new ProcessBuilder(
                    //"/bin/sh","-c","cd "+ path.toString()+"/src/main/resources/static/tmp/"+ " && "+"javac "+"Solution"+ ".java && java "+"Solution");
                     "cmd.exe", "/c", "cd "+ path.toString()+"/src/main/resources/static/tmp/"+ " && "+"javac "+payload.getClassName()+ ".java && java "+payload.getClassName());
                    //"sh", "cd "+ path.toString()+"/src/main/resources/static/tmp/"+ " && "+"javac "+payload.getClassName()+ ".java && java "+payload.getClassName());
                    // "cmd.exe", "/c", "cd \"C:\\Program Files\\Microsoft SQL Server\" && dir");

                    builder.redirectErrorStream(true);
                    Process p = builder.start();
                    System.out.println(p.waitFor()+" exit code");
                    BufferedReader r = new BufferedReader(new InputStreamReader(p.getInputStream()));
                    String line;
                    while (true) {
                        line = r.readLine();
                        if (line == null) { break; }
                        System.out.println(line);
                        out+=line+"\n";
                    }

                    result = new Result(payload,p.waitFor(),out);
                    // logg             er.info(result.toString());
            } catch (IOException e) {
            System.out.println("An error occurred.");
            out=e.toString();
            e.printStackTrace();
            }
           

            return ResponseEntity.accepted().headers(headers).body(result);
        }else{
            logger.info("UNAUTHORIZED TOKEN: "+ token);    
        }


        return ResponseEntity.badRequest().body(result);
        
    }
}
  



