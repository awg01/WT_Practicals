<%@page contentType="text/html" pageEncoding="UTF-8"%>

<%@page import="java.sql.*"%>
<%@page import="java.util.*"%>
<%@page import="java.io.*"%>

<%
  String email = request.getParameter("email");
  String pass = request.getParameter("pass");
  
  try{
      Class.forName("com.mysql.jdbc.Driver");
      Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/wt", "root", "your_password");
      
      PreparedStatement pstm = con.prepareStatement("select email from student where email=? AND pass=?");
      pstm.setString(1, email);
      pstm.setString(2, pass);
      ResultSet rs = pstm.executeQuery();
      
      if(rs.next()){
          out.println("login successful");
      }
      
  } catch(Exception e){
      System.out.println(e.toString());
  }
%>