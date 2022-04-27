package com.codedabble.compiler.models;

public class Result {

    Code payload;
    int exitCode;
    String output;

    public Result(){}


    
    public Result(Code payload,int exitCode,String output){
        this.payload=payload;
        this.exitCode=exitCode;
        this.output=output;

    }

    public Code getPayload(){
        return this.payload;
    }

    public void setPayload(Code payload){
         this.payload=payload;
    }


    public int getExitCode(){
        return this.exitCode;
    }

    public void setExitCode(int exitCode){
         this.exitCode=exitCode;
    }

    public String getOutput(){
        return this.output;
    }

    public void setOutput(String output){
         this.output=output;
    }


    @Override
    public String toString() {
      
        return "{"+
                "payload:'"+this.getPayload()+"',"+
                "exitCode:'"+this.getExitCode()+"',"+
                "output:'"+this.getOutput()+"',"

        +"}";
    }


}
