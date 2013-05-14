
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
		<?php require_once('header.php')?>
		<a name="package" />
		<h2>Package</h2>
		
		The WtkPackage task is an extension to Ant's standard
		<a href="http://jakarta.apache.org/ant/manual/CoreTasks/jar.html">Jar</a>
		task that handles JAD files correctly and is able to
    	include complete libraries into the resulting JAR file. It also
    	allows for preverification and obfuscation of the generated file.
    	
    	<p />
    	
    	In some more detail, the task does the following:
    	
    	<ol>

			<li>
    			It creates or updates a JAR from the files you specify the usual way
    			(for the Jar task). If you specify a libclasspath, the content of these
    			JARs will also be included.
    		</li>

			<li>
    			If no MANIFEST file is specified, a temporary one is generated.
    			Its contents are taken from the JAD file, with only the following
    			exceptions:
    			
    			<ul>
					<li>
    			 		The MIDlet-Jar-Url and MIDlet-Jar-Size keys are obmitted.
    			 	</li>

					<li>
    			 		The MicroEdition-Configuration and MicroEdition-Profile keys
    			 		are added as you specify them in the corresponding parameters
    			 		of the task, or they default to "CLDC-1.0" and "MIDP-1.0",
						or to what has been set using the wtk.cldc.version and wtk.midp.version properties.
    			 	</li>
				</ul>
			</li>

			<li>
    			It desired, it preverifies and/or obfuscates the new JAR file.
    		</li>

			<li>
    			Finally, the JAD file is updated for the new JAR file name and size.
    			If you request automatic version numbering, the MIDlet-Version key
    			is attempted to change.
    		</li>

		</ol>

		<p />
		
		The task provides the following parameters (in addition to those of the
		standard Jar task):
		
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
		    		The name of the JAR file to create or update.
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
		    		yes
		    	</td>

				<td>
		    		The name of the JAD file that accompanies the JAR file. Note that
		    		the JAD file already has to exist. It is not created by the Ant task.
		    	</td>
			</tr>

			<tr>
				<td>
		    		config
		    	</td>

				<td>
		    		string
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		The value of the MicroEdition-Configuration key to write to the
		    		MANIFEST.MF. Defaults to "CLDC-1.0" or to what has been set using
					the wtk.cldc.version propertiy. Only relevant if no MANIFEST
		    		is specified.
		    	</td>
			</tr>

			<tr>
				<td>
		    		profile
		    	</td>

				<td>
		    		string
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		The value of the MicroEdition-Profile key to write to the
		    		MANIFEST.MF. Defaults to "MIDP-1.0" or to what has been set
					using the wtk.midp.version propertiy. Only relevant if no MANIFEST
		    		is specified.
		    	</td>
			</tr>

			<tr>
				<td>
		    		autoversion
		    	</td>

				<td>
		    		boolean
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		If set to "true", the version number contained in the MIDlet-Version
		    		key of the JAD file is attempted to increase. The version number
		    		is assumed to follow the "major.minor.micro" scheme. The latter of the
		    		three numbers is incremented by one.
		    	</td>
			</tr>

			<tr>
				<td>
		    		preverify
		    	</td>

				<td>
		    		boolean
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		If set to "true", the resulting JAR file is preverified.
		    	</td>
			</tr>

			<tr>
				<td>
		    		cldc
		    	</td>

				<td>
		    		boolean
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		If set to "false" then "-cldc" is not passed as a parameter to the preverifier.
                                Defaults to "true".
		    	</td>
			</tr>

			<tr>
				<td>
		    		nonative
		    	</td>

				<td>
		    		boolean
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		Can be used to allow/forbid certain langage features during
		    		preverification. If set to "true", then "-nonative" is passed
		    		to the preverifier. Please turn "cldc" off before. Otherwise this
		    		setting might have no effect.
		    	</td>
			</tr>

			<tr>
				<td>
		    		nofloat
		    	</td>

				<td>
		    		boolean
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		Can be used to allow/forbid certain langage features during
		    		preverification. If set to "true", then "-nofloat" is passed
		    		to the preverifier. Please turn "cldc" off before. Otherwise this
		    		setting might have no effect.
		    	</td>
			</tr>

			<tr>
				<td>
		    		nofinalize
		    	</td>

				<td>
		    		boolean
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		Can be used to allow/forbid certain langage features during
		    		preverification. If set to "true", then "-nofinalize" is passed
		    		to the preverifier. Please turn "cldc" off before. Otherwise this
		    		setting might have no effect.
		    	</td>
			</tr>

			<tr>
				<td>
		    		obfuscate
		    	</td>

				<td>
		    		boolean
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		If set to "true", the resulting JAR file is obfuscated. 
		    		All classes are obfuscated with only three exceptions:
		    		
		    		<ul>
						<li>
		    				The main MIDlet classes, denoted by the MIDlet-# keys in
		    				the JAD file.
		    			</li>

						<li>
		    				Classes to be loaded by name (on a Motorola phone),
		    				denoted by an iDEN-Install-Class-# keys.
		    			</li>

						<li>
		    				Classes (or parts thereof) explicitly excluded from
		    				obfuscation using the <code>&lt;preserve&gt;</code>
		    				nested element.
		    			</li>
					</ul>
				</td>
			</tr>

			<tr>
				<td>
		    		keepmanifestorder
		    	</td>

				<td>
		    		boolean
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		If set to "true", the task keeps the original order of
					MANIFEST.MF entries in the resulting JAR. Otherwise then
					entries might be rearranged by Ant (which is usually not
					a problem).
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
		    		The bootclasspath is needed for preverification and obfuscation. It
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
		    		The classpath is needed for preverification and obfuscation. If you
		    		use any external libraries other than the MIDP API itself, and these
		    		libraries should not be included in the resulting JAR file (for example
		    		because they already exist on a certain phone), specify them here.
		    	</td>
			</tr>

			<tr>
				<td>
		    		libclasspath
		    	</td>

				<td>
		    		path
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		The libclasspath is needed for preverification and obfuscation,
		    		and it serves to specify libraries to be included in the resulting
		    		JAR file. If you use any external libraries that should be
		    		included in the resulting JAR file, specify them here. Consider this
		    		an equivalent to the Wireless Toolkit's lib directory. Note that
		    		you also use Ant's FileSet, ZipFileSet and ZipGroupFileSet nested
		    		elements to include existing classes and resources into the JAR.
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
		    		libclasspathref
		    	</td>

				<td>
		    		string
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		A reference to a libclasspath defined elsewhere.
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

		<hr />
		<h3>Preserve</h3>
		
		In addition to the various parameters, the task provides one nested
		element "preserve" that is used during obfuscation. The element has one
		parameter:
		
		<p />

		<table class="color">
			<tr>
				<th>Parameter</th>
				<th>Type</th>
				<th>Required</th>
				<th>Purpose</th>
			</tr>
			<tr>
				<td>class</td>
				<td>string</td>
				<td>yes	</td>
				<td>
		    		Specifies a class to be excluded from obfuscation and/or
		    		optimization when RetroGuard or ProGuard are used.
		    	</td>
			</tr>
			<tr>
				<td>if</td>
				<td>String</td>
				<td>no</td>
				<td>
		    		Provides fine-grained control over the classes being preserved.
					The class will only be preserved if the given property is
					defined.
		    	</td>
			</tr>
			<tr>
				<td>unless</td>
				<td>String</td>
				<td>no</td>
				<td>
		    		Provides fine-grained control over the classes being preserved.
					The class will only be preserved if the given property is not
					defined.
		    	</td>
			</tr>

		</table>

		<p />
		<hr />

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


		<hr />
		
		<hr />
		<h3>Exclude JAD elements from manifest</h3>
		MIDP Does not allow conflicts between JAD and Manifest, this means that most devices will refuse to run MIDlets if the JAD and Manifest does not agree on a specific parameter.
		Normally Antenna include all JAD options into the Manifest, but if you want to allow later changes of options in the JAD, you need to exclude that option from the Manifest.
		
		In addition to the various parameters, the task provides one nested
		element "preserve" that is used during obfuscation. The element has one
		parameter:
		
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
		    		Name
		    	</td>

				<td>
		    		string
		    	</td>

				<td>
	    			This or List
		    	</td>
	    		
			<td>
			    Specifies the name of a JAD attribute to be excluded from the Manifest
		    	</td>
			</tr>
			<tr>
				<td>
		    		List
		    	</td>

				<td>
		    		string
		    	</td>

				<td>
	    			This or name
				</td>
		    		
			<td>
			    Specifies the comma separated list of of a JAD attribute to be excluded from the Manifest
		    	</td>
			</tr>
			
		</table>
		
		Example:
		<pre>
        &lt;wtkpackage jarfile=&quot;hello.jar&quot;
                    jadfile=&quot;hello.jad&quot;
                    obfuscate=&quot;false&quot;
                    preverify=&quot;false&quot;&gt;
	    
	    &lt;fileset dir=&quot;classes&quot;/&gt;

	    &lt;!-- Exclude FOO from manifest. --&gt;
	    &lt;exclude_from_manifest name=&quot;FOO&quot;/&gt;

	    &lt;!-- Exclude A and B from manifest. --&gt;
	    &lt;exclude_from_manifest list=&quot;A,B&quot;/&gt;

	&lt;/wtkpackage&gt;
		</pre>
		<p />
</BODY>
</HTML>


