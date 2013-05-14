
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
		<?php require_once('header.php')?>
		<a name="smartlink" />
		<h2>SmartLink</h2>
		
		The WtkSmartLink task removes unnecessary classes from a given JAR file.
		It can be seen as some kind of "smart linker" (hence the name), although
		what it does bears more resemblance to an optimization that takes place
		after linking. Anyway, the task removes each class that is not "necessary".
		A class is considered necessary if it has at least one of the the following
		properties:

		<ol>
			<li>
				It is one the main MIDlet classes, denoted by a MIDlet-# key in
				the JAD file.
			</li>

			<li>
				It is a class to be loaded by name (on a Motorola phone),
				denoted by an iDEN-Install-Class-# key.
			</li>

			<li>
				It is explicitly excluded from smartlinking using the
				<code>&lt;preserve&gt;</code> nested element.
			</li>

			<li>
			    It is needed (imported) by another class that is necessary.
			</li>
		</ol>
		
		Note that the optimization mechanism is very simple. It only builds
		a tree of plain class dependencies (more or less equivalent to "import"
		information). It does not attempt to utilize any kind of data flow analysis
		on methods to achieve better results. Since I was only looking for a simple
		(but working) means to get unneeded parts of libraries out of my JAR file,
		this will probably not change in the near future (unless I find some spare
		time).
		
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
		    		The name of the JAR file to optimize.
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
		    		The name of the JAD file that accompanies the JAR file. If the
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
		    		The name of the resulting, optimized JAR file. Defaults to
		    		the original JAR file, if not specified.
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
		    		in ${wtk.home}/lib/midpapi.zip, or ${wtk.midpapi}, if specified.
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

		<h3>Preserve</h3>
		
		In addition to the various parameters, the task provides one nested
		element "preserve" that specifies classes that should be preserved in
		the JAR file even if the optimizing process detects them to be unnecessary.
		This is mostly the case for classes that are loaded by name while the
		application is running.
		
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
		    		The fully qualified name of a class that needs to be in the JAR
		    		file even if the smartlinking task thinks that it doesn't.
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

		<hr />
</BODY>
</HTML>


