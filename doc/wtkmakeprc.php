
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<?php require_once('header.php')?>
		<a name="makeprc" />
		<h2>MakePRC</h2>
		
		The WtkMakePrc task converts an existing JAR/JAD file combination
		into a Palm OS PRC file that can be used with either MIDP for Palm OS or
		the Websphere Micro Environment for PalmOS 5.x upwards. It works in
		two possible configurations, with the "converter" attribute deciding
		which one is chosen:
		
		<ul>

			<li>
		    With the Wireless Toolkit up to version 1.0.4. From version
    		2.0 (which is also the first version to support MIDP 2.0), the PalmOS
			converter is no longer included in the Wireless Toolkit, because
			MIDP for PalmOS doesn't support MIDP 2.0.
		  </li>

			<li>
		    With the IBM Websphere Micro Environment for PalmOS 5.x upwards. In this
		    case, the "wme.home" property needs to point to the WME home directory.
		  </li>

		</ul>

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

				<td rowspan="2">
		    		at least one of these
		    	</td>

				<td>
		    		The JAR file from which to read classes.
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
		    		The JAD file that contains MIDlet definitions.
		    	</td>
			</tr>

			<tr>
				<td>
		    		prcfile
		    	</td>

				<td>
		    		file
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		The Palm OS PRC file to create. Defaults to the JAR file, but
		    		with the ".prc" extension.
		    	</td>
			</tr>

			<tr>
				<td>
		    		converter
		    	</td>

				<td>
		    		string
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		The converter to use for generating the PRC file. Possible values
		    		are "wtk", which results in Sun's WTK converter being used, or
		    		"wme", which calls the converter from the IBM WME. Unless the property
					"wtk.wme.home" is defined, the WTK converter is the default option,
					so there's normally no need to change this property.
		    	</td>
			</tr>

			<tr>
				<td>
		    		icon
		    	</td>

				<td>
		    		file
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		An icon to use for the application.
		    	</td>
			</tr>

			<tr>
				<td>
		    		smallicon
		    	</td>

				<td>
		    		file
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		A small icon to use for the application.
		    	</td>
			</tr>

			<tr>
				<td>
		    		name
		    	</td>

				<td>
		    		string
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		The name of the application to display on the Palm.
		    	</td>
			</tr>


			<tr>
				<td>
		    		longname
		    	</td>

				<td>
		    		string
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		A longer name for the application to display on the Palm.
		    	</td>
			</tr>


			<tr>
				<td>
		    		creator
		    	</td>

				<td>
		    		string
		    	</td>

				<td>
		    		only if type other than "Data"
		    	</td>

				<td>
		    		A 4-byte creator ID to use for the application. For
		    		non-experimental products, you need to register with
		    		<a href="http://www.palmos.com/dev/programs/">PalmSource</a>
		    		first.
		    	</td>
			</tr>


			<tr>
				<td>
		    		type
		    	</td>

				<td>
		    		string
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		A type to use for the application. Defaults to "Data". 
		    	</td>
			</tr>

			<tr>
				<td>
		    		highres</td>

				<td>
		    		boolean</td>

				<td>
		    		no
		    	</td>

				<td>
	    		(WME only) Set to &quot;true&quot; to support High-Resolution mode (320*320, 320*480). </td>
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


