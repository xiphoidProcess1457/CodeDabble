package com.codedabble.compiler.models;

public class Code {
    String codeBody;
    String className;

    public Code(){}

    public Code(String codeBody,String className){
        this.codeBody=codeBody;
        this.className=className;
    }

    public String getCodeBody(){
        return this.codeBody;
    }

    public void setCodeBody(String codeBody){
         this.codeBody=codeBody;
    }

    public String getClassName(){
        return this.className;
    }

    public void setClassName(String className){
         this.className=className;
    }

    @Override
    public String toString() {
      
        return "{"+
                "codeBody:'"+getCodeBody()+"',"+
                "class:'"+getClassName()+"'"
        +"}";
    }


}
