
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<%@page import="java.io.*" %>
<%@page import="java.sql.*" %>
<%@page import="java.util.*" %>
<%@page import="java.text.ParseException" %>


<%
  String fName = request.getParameter("fName");
  String lName = request.getParameter("lName");
  int mobile = Integer.parseInt(request.getParameter("mobile"));
  String email = request.getParameter("eMail");
  String pass = request.getParameter("pass");
  String dob = request.getParameter("dob");
  String gender = request.getParameter("gender");
  
  
  try{
      Class.forName("com.mysql.jdbc.Driver");
      Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/wt", "root", "your_password");
      
      PreparedStatement pstm = con.prepareStatement("insert into student values(?, ?, ?, ?, ?, ?, ?)");
      pstm.setString(1, fName);
      pstm.setString(2, lName);
      pstm.setInt(3, mobile);
      pstm.setString(4, email);
      pstm.setString(5, gender);
      pstm.setString(6, pass);
      pstm.setString(7, dob);
      
      int res = pstm.executeUpdate();
      response.sendRedirect("index.html");
  }catch(Exception e){
      out.println(e.getStackTrace()[0].getLineNumber());
      response.sendRedirect("index.html");

  }

%>