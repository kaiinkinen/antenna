
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<?php require_once('header.php')?>
		<a name="obfuscate" />
		<h3>Using an obfuscator</h3>

		To allow obfuscation, either RetroGuard or ProGuard is required. Simply
		put one (or both) of the following files into the WTK's  "bin"
		directory or make sure you have at least one of them in your CLASSPATH:
		
		<p />

		<pre>
retroguard.jar
proguard.jar
		</pre>

		Alternatively, you can also set the following properties to the home
		directories of existing installations of the obfuscators (where home
		means the root directory of the software, which is, for ProGuard, one
		level higher than the lib directory where the JAR file is located):

		<pre>
&lt;property name="wtk.retroguard.home" value="your path goes here"/&gt;
&lt;property name="wtk.proguard.home" value="your path goes here"/&gt;
		</pre>

		<p />
		
		If both obfuscators are available, ProGuard is preferred
		because it usually provides better results.

		<p />

		Note that if using RetroGuard and setting a BOOTCLASSPATH through the
		wtk.midpapi property, it might also become necessary to set the
		following property:

		<pre>
&lt;property name="wtk.emptyapi" value="your path goes here"/&gt;
		</pre>

		This property latter points
		to the "emptied-out" MIDP API (normally in "wtklib/emptyapi.zip") and is
		used for obfuscation with RetroGuard because this tool has some
		problems obfuscating against the normal MIDP API. This does not apply to
		ProGuard.

		<h2>Obfuscate</h2>


		
		The WtkObfuscate task provides a standalone obfuscation task. It uses either
		ProGuard or RetroGuard, depending on which of the two it finds it the WTK's
		bin directory or in the CLASSPATH. ProGuard is preferred, if both are found, unless the
		"obfuscator" attribute is specified. The task is normally not needed, since the WtkPackage
		task includes the same functionality. 
		Yet, people who don't like the "all-in-one" nature of the build and packaging tasks
		might prefer to apply the obfuscator in a separate task.
		
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
		    		jarfile
		    	</td>

				<td>
		    		file
		    	</td>

				<td>
		    		yes
		    	</td>

				<td>
		    		The unobfuscated source JAR file to read classes from.
		    	</td>
			</tr>


			<tr>
				<td>
		    		jadfile
		    	</td>

				<td>
		    		file
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		A JAD file that accompanies the JAR file. The task uses this
		    		file to determine the list of classes to exclude from
		    		obfuscation as follows:
		    		
		    		<ul>
						<li>
		    				The main MIDlet classes, denoted by the MIDlet-# keys in
		    				the JAD file are preserved.
		    			</li>

						<li>
		    				Classes to be loaded by name (on a Motorola phone),
		    				denoted by an iDEN-Install-Class-# keys are preserved,
		    				too.
		    			</li>

					</ul>
		    		
		    		Additional classes to spare from obfuscation can be specified
		    		using the "preserve" nested element.

					<p />
					
		    		If the
		    		source JAR file is overwritten (no "tojarfile" being specified),
		    		the "MIDlet-Jar-Size" key in the JAD is updated when the task is
		    		finished.

		    	</td>
			</tr>

			<tr>
				<td>
		    		tojarfile
		    	</td>

				<td>
		    		file
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		The obfuscated target JAR file to create. Defaults to the
		    		source JAR file, if not specified.
		    	</td>
			</tr>

			<tr>
				<td>
		    		bootclasspath
		    	</td>

				<td>
		    		path
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		The bootclasspath is needed by the obfuscator. It
		    		defaults to the MIDP API contained in ${wtk.home}/lib/midpapi.zip,
		    		or ${wtk.midpapi}, if specified. Only for RetroGuard, the emptied-out
		    		MIDP API is used.
		    	</td>
			</tr>

			<tr>
				<td>
		    		classpath
		    	</td>

				<td>
		    		path
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		The classpath is needed by the obfuscator. If you
		    		use any external libraries other than the MIDP API itself,
		    		specify them here.
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
		    		bootclasspathref
		    	</td>

				<td>
		    		string
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		A reference to a bootclasspath defined elsewhere.
		    	</td>
			</tr>

			<tr>
				<td>
		    		obfuscator
		    	</td>

				<td>
		    		String
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		Allows to choose between ProGuard and RetroGuard, in case both
		    		obfuscators are present. Valid arguments are "proguard" and
		    		"retroguard". If this attribute is not specified, ProGuard is
		    		always preferred over RetroGuard.
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

			<tr>
				<td>
		    		verbose
		    	</td>

				<td>
		    		boolean
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		Allows to set the verbosity of the task's output.
		    	</td>
			</tr>

		</table>

		<p />

		<h3>Preserve</h3>
		
		In addition to the above parameters, the task provides one nested
		element "preserve" that specifies classes that should be excluded
		from obfuscation. This is mostly the case for classes that are loaded
		by name while the application is running. This nested element is
		supported by RetroGuard as well as ProGuard, so it's "portable".
		If you are looking for a means to pass obfuscator-specific arguments,
		have a look at the "argument" nested element below.
		
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
		    		class
		    	</td>

				<td>
		    		string
		    	</td>

				<td>
		    		yes
		    	</td>

				<td>
		    		The fully qualified name of a class that should be neither
		    		obfuscated nor removed (if ProGuard is used and the class
		    		is not necessary).
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
		    		Provides fine-grained control over the classes being preserved.
					The class will only be preserved if the given property is
					defined.
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
		    		Provides fine-grained control over the classes being preserved.
					The class will only be preserved if the given property is not
					defined.
		    	</td>
			</tr>

		</table>

		<p />

		<h3>Argument</h3>
		
	    The "argument" nested element allows to pass obfuscator-specific
	    arguments. In contrast to the general parameters of the obfuscator
	    task and the "preserve" nested element, this one is not portable.
	    Arguments are passed to the obfuscator verbatim. Please see the
	    RetroGuard or ProGuard documentation for a complete list of options
	    supported. 
		
		<p />

		<table class="color">
			<tr>
				<th>Parameter</th>
				<th>Type</th>
				<th>Required</th>
				<th>Purpose</th>
			</tr>
			<tr>
				<td>value</td>
				<td>string</td>
				<td>yes/td>
				<td>
		    		Specifies the argument to pass to the obfuscator.
		    	</td>
			</tr>
			<tr>
				<td>if</td>
				<td>String</td>
				<td>no</td>
				<td>
		    		Provides fine-grained control over the arguments.
					The argument will only be applied if the given property is
					defined.
		    	</td>
			</tr>
			<tr>
				<td>unless</td>
				<td>String</td>
				<td>no</td>
				<td>
		    		Provides fine-grained control over the arguments.
					The argument will only be applied if the given property is not
					defined.
		    	</td>
			</tr>

		</table>

		<p />

		<hr />
</BODY>
</HTML>


