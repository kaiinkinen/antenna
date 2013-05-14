
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
		<?php require_once('header.php')?>
		<a name="preverify" />
		<h2>Preverify</h2>
		
		The WtkPreverify task provides a standalone preverification task. It is normally
		not needed, since the WtkBuild and WtkPackage tasks include the same functionality.
		Yet, people who don't like the "all-in-one" nature of the build and packaging tasks
		might prefer to apply the preverifier in a separate task.
		
		<p />
		
		WtkPreverify can operate either on directories or on JAR files, not both. If the input
		is read from a directory, the output will be written to a
		directory (that is, we are dealing with single class files).
		If the input is read from a JAR file, the output will be written
		to a JAR file. If, in the latter case, no output JAR is specified, the input JAR is
		overwritten. In addition, if a JAD file is specified, its
		"MIDlet-Jar-Size" key is updated.
		
		<p />
		<b>Note:</b> In the past, a number of users reported preverification failures. These should be
		fixed with Antenna 0.9.11. If you still have problems during preverification, please make sure
		that <code>jar[.exe]</code> (from the JDK) is in your path. Depending on the order
		and versions of JDKs and WTKs you installed, this might not be the case, making
		the <code>preverify[.exe]</code> utility from the WTK fail.

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
		    		srcdir
		    	</td>

				<td>
		    		file
		    	</td>

				<td rowspan="2">
		    		Either of these two.
		    	</td>

				<td>
		    		The source directory, containing non-preverified classes.
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
		    		The source JAR file, containing non-preverified classes.
		    	</td>
			</tr>

			<tr>
				<td>
		    		destdir
		    	</td>

				<td>
		    		file
		    	</td>

				<td>
		    		yes, if "srcdir" is being used
		    	</td>

				<td>
		    		The target directory to write the preverified classes to.
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
		    		no, but can be combined with "jarfile"
		    	</td>

				<td>
		    		The target JAR file to write the preverified classes to. If not
		    		specified, the source JAR is overwritten.
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
		    		The name of the JAD file that accompanies the JAR file. If the
		    		source JAR file is overwritten (no "tojarfile" being specified),
		    		the "MIDlet-Jar-Size" key in the JAD is updated when the task is
		    		finished.
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
		    		Specifies the basic system classes that are needed by the
		    		application. Defaults to the MIDP API contained
		    		in ${wtk.home}/lib/midpapi.zip, or ${wtk.midpapi},
		    		if specified.
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
		    		Specifies additional libraries that are needed by the application,
		    		but not part of the JAR file (for example libraries that are already
		    		available on a certain phone).
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


