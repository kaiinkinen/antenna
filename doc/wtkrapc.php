
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
		<?php require_once('header.php')?>
		<a name="WtkRapc" />
		<h2>RAPC</h2>
		
        <p>
        The WtkRapc task invokes the BlackBerry <code>rapc</code> compiler.&nbsp;It 
        takes for input a list of <code>.java</code> files, or a JAR file, and generates a <code>.cod</code> file 
        that can be loaded onto the BlackBerry handset.
        </p>
        
        <p>
        This Ant task assumes the BlackBerry build tools are already installed and accessible.
        </p>
        
        <p>Before using this task, you must define property <code>bb.buildjars.home</code>, which defines where to find the BlackBerry <code>rapc</code> compiler, 
        for example: 
        </p>

        <p>
        <code>&nbsp;&nbsp;&nbsp; &lt;property name=&quot;bb.buildjars.home&quot; location=&quot;...&quot;/&gt;</code>
        </p>
        
        <p>To define the RAPC task, do as follows: </p>
        
        <p>
        <code>&nbsp;&nbsp;&nbsp; &lt;taskdef name=&quot;wtkrapc&quot; classname=&quot;de.pleumann.antenna.WtkRapc&quot; 
        classpath=&quot;${buildjars.home}/antenna-bin-0.9.12a.jar&quot;/&gt;</code>
        </p>
        
        <a name="jad" />

		<p>
		The task provides the following parameters:
		</p>
		
		<p>


		</p>
		
		
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
		    		The name of the JAD file to use</td>
			</tr>

			<tr>
				<td>
		    		source</td>

				<td>
		    		file
		    	</td>

				<td>
		    		yes
		    	</td>

				<td>
		    		List of <code>.java</code> files or the name of the JAR file containing the input java classes.
		    	</td>
			</tr>

			<tr>
				<td>
		    		codename
		    	</td>

				<td>
		    		string
		    	</td>

				<td>
		    		yes
		    	</td>

				<td>
		    		The codename to for the generated <code>.cod</code> file.</td>
			</tr>

			<tr>
				<td>
		    		import</td>

				<td>
		    		file
		    	</td>

				<td>
		    		yes
		    	</td>

				<td>
		    		List of import libraries, such as the BlackBerry Java APIs.</td>
			</tr>

			<tr>
				<td>
		    		destdir
		    	</td>

				<td>
		    		file
		    	</td>

				<td>
		    		yes
		    	</td>

				<td>
		    		If specified, indicates the directory where to copy the JAD, 
					ALX, and generated <code>.cod</code> file.</td>
			</tr>

			<tr>
				<td>
		    		quiet
		    	</td>

				<td>
		    		boolean
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		If specified, indicates to use the -quiet argument</a></a> indicating rapc to use the quiet console output mode.
		    	</td>
			</tr>

			<tr>
				<td>midlet</td>
				<td>boolean</td>
				<td>no</td>
				<td>
		    		If specified, indicates to use the -midlet argument, 
					indicating rapc to build a MIDlet and corresponding JAR.
				</td>
			</tr>
			<tr>
				<td>library</td>
				<td>boolean</td>
				<td>no</td>
				<td>
		    		If specified, indicates to use the -library argument, 
					indicating rapc to build a library.
				</td>
			</tr>



		</table>

		<p>Usage:</p>
		
		
		<p>
		<code>
		&lt;target name=&quot;rapc&quot; description=&quot;RIM COD Compiler&quot; depends=&quot;jar&quot;&gt;<br>
        &nbsp;&nbsp;&nbsp; &lt;wtkrapc <b>jadfile</b>=&quot;${jadfile}&quot; 
		<b>source</b>=&quot;${jarfile}&quot; <b>codename</b>=&quot;${codename}&quot; 
		<b>import</b>=&quot;${bb.api.jar}&quot; 
		<b>destdir</b>=&quot;output/tocod/&quot;/<b> quiet</b>=&quot;true&quot; <b>midlet</b>=&quot;false&quot;&gt;<br>
		&lt;/target&gt;</code></p>

        <p>
        It is good practice to build your MIDP application using Antenna's steps WtkBuild and so on, which produces a JAR file, and input this JAR file into the RAPC step. 
        This approach allows you to separate the generation of standard MIDlet and BlackBerry packaging.
        </p>
        
        <p>
        <b><i>*Note that the BlackBerry tools, such as RAPC, are only available on Microsoft Windows platforms.</i></b>
        </p>

		<p />

		<hr />
</BODY>
</HTML>


