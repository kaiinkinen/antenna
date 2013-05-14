
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<?php require_once('header.php')?>

		<a name="deploy" />
		<h2>Deploy</h2>
		
		The WtkDeploy allows to deploy a MIDlet suite to a Web server for later
		download by users. Currently, a prerequisite is that the server is running
		the Antenna <a href="#ota">OTA servlet</a>. Other methods might be added at
		a later point.
		
		<p />

		The task provides the following parameters:
		
		<p />

		<table class="color">
			<tr>
				<th>
		  			Parameter
		  		</th>

				<th>
		  			Type
		  		</th>

				<th>
		  			Required
		  		</th>

				<th>
		  			Purpose
		  		</th>
			</tr>

			<tr>
				<td>
		    		jadfile
		    	</td>

				<td>
		    		file
		    	</td>

				<td>
		    		yes
		    	</td>

				<td>
		    	    The JAD file to deploy.
		    	</td>
			</tr>

			<tr>
				<td>
		    		jarfile
		    	</td>

				<td>
		    		file
		    	</td>

				<td>
		    		yes
		    	</td>

				<td>
		    	    The JAR file to deploy.
		    	</td>
			</tr>

			<tr>
				<td>
		    		target
		    	</td>

				<td>
		    		URL
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    	    The URL under the <a hef="#ota">OTA servlet</a> can be found.
		    	    Must start with "http://". Must include a port number, if the
		    	    servlet is not running on port 80. The parameter can be omitted
		    	    if the deployment target has already been specified in the
		    	    JAD file using the <a href="#jad">JAD</a> task's "target" parameter.
		    	</td>
			</tr>

			<tr>
				<td>
		    		delete
		    	</td>

				<td>
		    		boolean
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    	    If true, existing JAR and JAD files are deleted from the server
		    	    instead of uploading new ones.
		    	</td>
			</tr>

			<tr>
				<td>
		    		login
		    	</td>

				<td>
		    		string
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    	    Specifies a login. Needed if the servlet is configured to require
		    	    authentication.
		    	</td>
			</tr>

			<tr>
				<td>
		    		password
		    	</td>

				<td>
		    		string
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    	    Specifies a password. Needed if the servlet is configured to require
		    	    authentication.
		    	</td>
			</tr>

			<tr>
				<td>
		    		if
		    	</td>

				<td>
		    		String
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		Provides fine-grained control over task execution based on a
		    		property definition. The task will only be executed if the
		    		given property is defined.
		    	</td>
			</tr>

			<tr>
				<td>
		    		unless
		    	</td>

				<td>
		    		String
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		Provides fine-grained control over task execution based on a
		    		property definition. The task will only be executed if the
		    		given property is not defined.
		    	</td>
			</tr>

		</table>
		
		<hr />
</BODY>
</HTML>


