<%@ page language="java" contentType="text/html; charset=UTF-8"  pageEncoding="UTF-8"%>
  <%@ taglib prefix="s" uri="/struts-tags" %>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<h1>Struts 2 Login Application</h1>
<s:form action ="verify">
<s:textfield name="uname" lable="Enter Username"/><br>
<s:password name ="password" lable="Enter Password"/><br>
<s:submit value="Login" align="center"/>
</s:form>
</body>
</html>