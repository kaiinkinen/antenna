
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
		<?php require_once('header.php')?>
		<a name="preprocess" />
		<h2>Old Preprocessor</h2>
		<b>This section contains the documentation of the old preprocessor. to access the preprocessor backend, set the version variable to "1"<br/></b>
		
		The WtkPreprocess task provides a simple preprocessor, similar to the ones
		known from C and other languages. It allows for conditional compilation and
		inclusion of one source file into another and is helpful when trying to
		maintain a single source for several devices, each having its own bugs,
		add-on APIs, etc.
		
		<p />
		
		Preprocessing source files to manage implementation
		differences is quite unusual in Java programming. Actually
		it might be considered "evil technology" by OO purists. While the latter is
		somewhat true - interfaces, abstract classes and loading classes by name are
		definitely the cleaner approach - pure OO is something you often cannot afford when
		developing for devices that accept only JAR files up to 30 KB. A simple
		interface easily costs a kilobyte or more in the JAR. Loading
		implementation-specific classes by name usually gets in the way of obfuscation.
		A conditionally compiled block, on the other hand, costs absolutely nothing
		(apart, maybe, from a bit of pride, in case you consider yourself an OO purist,
		but isn't that a small price to pay for a MIDlet that works merrily on dozens of
		different mobile phones?).
		
		<p />
		
		Please note that the task only preprocesses the source files, but doesn't
		compile them. So you still have to run the Java compiler on the preprocessed
		files afterwards. Since the preprocessor doesn't filter "inactive" conditional
		parts by removing them, but by commenting them out instead, line numbers for compiler
		errors are usually the same as for the original code (unless you are using
		#include).
		
		<p />
		
		In addition to conditional compilation the preprocessor
		replaces Ant-style properties in the source-code.
		
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

				<td>
		    		yes
		    	</td>

				<td>
		    	    The source directory from which Java source files are being
		    	    preprocessed.
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
		    		yes
		    	</td>

				<td>
		    	    The destination directory to which preprocessed files are
			    	written.
		    	</td>
			</tr>

			<tr>
				<td>
		    		newext
		    	</td>

				<td>
		    		string
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    	    Specifies a new file extension for all files that have gone
		    	    through the preprocessor. Useful when you save the files to
		    	    preprocess with a special extension to distinguish them from
		    	    normal Java files. The new extension replaces everything from
		    	    (and including) the first dot in the filename up to the end,
		    	    so when you specify newext=".java", a file "MyFile.j2me.pp"
		    	    becomes "MyFile.java" once it goes through the peprocessor. If
		    	    you don't specify this parameter, file extensions are not
		    	    changed.
		    	</td>
			</tr>

			<tr>
				<td>
		    		indent
		    	</td>

				<td>
		    		boolean
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    	    Controls indentation of comments that the preprocessor writes into
		    	    the target files. Defaults to true, which results in comments
		    	    having the same indentation as the the original line. Setting it to
		    	    false results in comments starting at the beginning of a line.
		    	</td>
			</tr>

			<tr>
				<td>
		    		symbols
		    	</td>

				<td>
		    		string
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		A comma-separated list of identifiers that are initially defined
		    		for each file the preprocessor is invoked on.
		    	</td>
			</tr>

			<tr>
				<td>
		    		encoding
		    	</td>

				<td>
		    		string
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		Specifies the encoding to use when reading or writing source files.
					Defaults to the platform default encoding, if not specified.
		    	</td>
			</tr>

			<tr>
				<td>
		    		filter
		    	</td>

				<td>
		    		boolean
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		When set to true, the preprocessor filters all directives and
		    		"inactive" conditional parts. The resulting file contains only
		    		the actual Java source code that goes into the compiler.
		    		Defaults to false.
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
		    		Turn verbose output on or off.
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
		
		The task forms an implicit FileSet, thus the usual "include", "exclude" etc.
		nested elements are used to specify the source files for preprocessing.
		The pattern "**/*.java" is included in this FileSet per default, so it
		is normally enough to specify the source and destination directories.
		
		<p />

		<h3>Directives</h3>
		
		The preprocessor supports the following directives inside a Java
		source file. All directives must immediately follow a "//" comment that
		starts at the beginning of a line (whitespace is allowed left of them, but
		no Java code). That way, they don't interfere with normal Java compilation.
		Directives must not span multiple lines of code.
		
		<p />

		<table class="color">
			<tr>
				<th width="30%">
		  			Directive
		  		</th>

				<th>
		  			Decription
		  		</th>
			</tr>

			<tr>
				<td>
		  			#define &lt;identifier&gt;
		  		</td>

				<td>
		  			Defines an identifier, thus making its value "true" when it is
		  			referenced in further expressions.
		  		</td>
			</tr>

			<tr>
				<td>
		  			#undefine &lt;identifier&gt;
		  		</td>

				<td>
		  			Undefines an identifier, thus making its value "false" when it is
		  			referenced in further expressions.
		  		</td>
			</tr>

			<tr>
				<td>
		  			#ifdef &lt;identifier&gt;
		  		</td>

				<td rowspan="8">
		  			The following lines are compiled only if the given identifier
		  			is defined (or undefined, in the case of an "#ifndef"
		  			directive). "#else" does exactly what your think it does. Each
		  			directive must be ultimately closed by an "#endif" directive.
		  			The "#elifdef" and "#elifndef" directives help to specify longer conditional
		  			cascades without having to nest each level.
		  			
		  			<p />
		  			
		  			The "#if" and "#elif" directives even allow to use complex expressions.
		  			These expressions are very much like Java boolean expressions. They
		  			may consist of identifiers, parentheses and the usual "&amp;&amp;", "||",
		  			"^", and "!" operators.
		  			
		  			<p />
		  			
		  			Please note that "#ifdef" and "#ifndef" don't
		  			support complex expressions. They only expect a single argument - the
		  			symbol to be checked.
		  		</td>
			</tr>

			<tr>
				<td>
		  			#ifndef &lt;identifier&gt;
		  		</td>
			</tr>


			<tr>
				<td>
		  			#else
		  		</td>
			</tr>

			<tr>
				<td>
		  			#endif
		  		</td>
			</tr>

			<tr>
				<td>
		  			#elifdef &lt;identifier&gt;
		  		</td>
			</tr>

			<tr>
				<td>
		  			#elifndef &lt;identifier&gt;
		  		</td>
			</tr>

			<tr>
				<td>
		  			#if &lt;expression&gt;
		  		</td>
			</tr>

			<tr>
				<td>
		  			#elif &lt;expression&gt;
		  		</td>
			</tr>

			<tr>
				<td>
		  			#include &lt;filename&gt;
		  		</td>

				<td rowspan="2">
		  			Includes the given source file at the current position. Must
		  			be terminated by "#endinclude" for technical reasons. The
		  			filename may also be given as an Ant-style property (${name}).
		  			The property needs to be defined in your build.xml file then. Note
		  			that relative file names are interpreted as relative to the
		  			build.xml file.
		  		</td>
			</tr>

			<tr>
				<td>
		  			#endinclude
		  		</td>
			</tr>

		</table>

		<p />


</BODY>
</HTML>


