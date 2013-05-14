
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
		<?php require_once('header.php')?>
		<a name="run" />
		<h2>WtkRun</h2>
		
		The WtkRun task starts a MIDlet suite in the Wireless Toolkit's emulator.
		The MIDlet suite needs to be packaged for this, that is, a JAR/JAD file
		pair has to exist.
		
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
		    		this or jaddirectory
		    	</td>

				<td>
		    		The JAD file that describes the MIDlet suite. The JAR file
		    		is taken from the MIDlet-Jar-URL key.
		    	</td>
			</tr>
			
			<tr>
				<td>
		    		jaddirectory
		    	</td>

				<td>
		    		directory
		    	</td>

				<td>
		    		this or jadfile
		    	</td>

				<td>
					Opens a file-chooser to select a jad file from the directory
		    	</td>
			</tr>			

			<tr>
				<td>
		    		classpath
		    	</td>

				<td>
		    		string
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		Additional classes that are needed for execution.
		    	</td>
			</tr>

			<tr>
				<td>
		    		classpathref
		    	</td>

				<td>
		    		string
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		A reference to a classpath defined elsewhere.
		    	</td>
			</tr>

			<tr>
				<td>
		    		heapsize
		    	</td>

				<td>
		    		string
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		The heap space available to the MIDlet suite. May be something
		    		like "65536", "128K" or "1M". Defaults to the latter.
		    	</td>
			</tr>

			<tr>
				<td>
		    		device
		    	</td>

				<td>
		    		string
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		The device (skin) to use during emulation. The Wireless Toolkit
		    		comes with the following devices pre-installed:
		    		
		    		<ul>

						<li>
		    				DefaultColorPhone (also default if parameter is not specified at all)
		    			</li>

						<li>
		    				DefaultGreyPhone
		    			</li>

						<li>
		    				MinimumPhone
		    			</li>

						<li>
		    				Motorola_i85s
		    			</li>

						<li>
		    				RIMJavaHandheld
		    			</li>

						<li>
		    			  PalmOS_Device (requires <a href="http://www.palmos.com/dev/tools/emulator/">Palm OS emulator</a>)
		    			</li>

					</ul>
				</td>
			</tr>

			<tr>
				<td>
		    		wait
		    	</td>

				<td>
		    		boolean
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		Specifies whether Ant should wait for the emulator to exit. Defaults
		    		to true. Note that this parameter also determines whether you can see
		    		the emulator's stdout/stderr streams. If Ant doesn't wait for the
		    		emulator to finish, this info goes to /dev/nul.
		    	</td>
			</tr>

			<tr>
				<td>
		    		trace
		    	</td>

				<td>
		    		string
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		Specifies whether the emulator should display verbose information
		    		on the MIDlet in execution. This is basically a comma-separated list
		    		of items whose possible values seem to depend on the WTK version.
		    		Common options are:
		    		
		    		<ul>
						<li>
		    				class - Displays class loading information.
		    			</li>

						<li>
		    				gc - Display garbage collection information.
		    			</li>

						<li>
		    				all - Displays all trancing information
		    			</li>
					</ul>
		    		
		    		Please see your WTK documentation for a complete list of options. Of
		    		course this parameter only makes sense when used together with "wait=true".
		    	</td>
			</tr>

			<tr>
				<td>
		    		debug
		    	</td>

				<td>
		    		address
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		Enables remote debugging support.
		    		You need to specify the local port the emulator should wait for the debugger on, for example, "8000", and then tell your IDE
		    		to start a remote debugging session with "localhost:8000" (or a different host if your really want remote debugging)
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

		<p />

		<hr />
</BODY>
</HTML>


