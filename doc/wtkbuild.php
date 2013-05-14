
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
		<?php require_once('header.php')?>
		<a name="build" />
		<h2>Build</h2>
		
		The WtkBuild task is an extension to Ant's standard
		<a href="http://jakarta.apache.org/ant/manual/CoreTasks/javac.html">Javac</a>
		task that
		primarily sets the appropriate classpath and allows for preverification.
		
		<p />
		
		The task sets the following parameters of the original Javac task to
		useful default values:
		
		<p />

		<table class="color">
			<tr>
				<th>
		  			Parameter
		  		</th>

				<th>
		  			Value
		  		</th>
			</tr>

			<tr>
				<td>
		    		target
		    	</td>

				<td>
		    		1.1
		    	</td>
			</tr>

			<tr>
				<td>
		    		debug
		    	</td>

				<td>
		    		true
		    	</td>
			</tr>

			<tr>
				<td>
		    		bootclasspath
		    	</td>

				<td>
		    		${wtk.home}/lib/midpapi.zip, or ${wtk.midpapi}, if specified
		    	</td>
			</tr>

		</table>

		<p />
		
		In addition to these (and other parameter supported by Ant's "Javac"
		task), this task provides some new parameters:
		
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
		    		preverify
		    	</td>

				<td>
		    		boolean
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		If set to "true", the resulting class files are preverified.
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


