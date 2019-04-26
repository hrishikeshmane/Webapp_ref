package com.vishnu;

import java.io.IOException;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class Myservlet
 */
public class Myservlet extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public Myservlet() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	
   protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException

   {
	  String un=request.getParameter("username");
	String pw=request.getParameter("password");
	
	// Connect to mysql and verify username password
	
	try {
		Class.forName("com.mysql.cj.jdbc.Driver");
	 // loads driver
	Connection c = DriverManager.getConnection("jdbc:mysql://localhost:3306/test", "root", "root"); // gets a new connection

	PreparedStatement ps = c.prepareStatement("select * from Login where username=? and password=?");
	ps.setString(1, un);
	ps.setString(2, pw);

	ResultSet rs = ps.executeQuery();

	while (rs.next()) {
		response.sendRedirect("success.html");
		return;
	}
	response.sendRedirect("error.html");
	return;
	} 
	catch (ClassNotFoundException | SQLException e) {
		// TODO Auto-generated catch block
		e.printStackTrace();
	}
	
}
}
