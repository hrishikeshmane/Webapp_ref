<%@ page import = "java.sql.*"%>
<%
try
{
String email = request.getParameter("username");
String password = request.getParameter("password");
Class.forName("com.mysql.cj.jdbc.Driver");
Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/test","root","root");
String query ="Select username,password from Login where username=? and password=?";
PreparedStatement ps=con.prepareStatement(query);
ps.setString(1, email);
ps.setString(2, password);
ResultSet rs=ps.executeQuery();
if(rs.next())
{   
    response.sendRedirect("success.html");
}
else
{
	response.sendRedirect("error.html");
}
}
catch(Exception e)
{
	e.printStackTrace();
	out.println(e);
}
%>