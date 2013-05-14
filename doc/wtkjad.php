
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<?php require_once('header.php')?>
		<a name="jad" />
		<h2>JAD</h2>
		
		The WtkJad task allows to create new JAD files from scratch or modify
		existing ones. In particular, it is able to update the MIDlet-Jar-URL and
		MIDlet-Jar-Size keys automatically if a JAR file is specified, and increase
		the MIDlet-Version key if automatic versioning is requested.
		
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
		    		The name of the JAD file to create or update.
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
		    		no
		    	</td>

				<td>
		    		The name of the JAR file that accompanies the JAD file. If
		    		present, the task tries to update the MIDlet-Jar-URL and
		    		MIDlet-Jar-Size attributes. Note that the "deploy" parameter
		    		also has an effect on the MIDlet-Jar-URL attribute.
		    	</td>
			</tr>

			<tr>
				<td>

		    		manifest
		    	</td>

				<td>
		    		file
		    	</td>

				<td>
		    		no
		    	</td>

				<td>

		    		If this parameter is present, a MANIFEST file is generated, too.
					The contents of the manifest are taken from the JAD file, with
					only the following exceptions:
    			
	    			<ul>
						<li>
	    			 		The MIDlet-Jar-Url and MIDlet-Jar-Size keys are obmitted.
	    			 	</li>

						<li>
	    			 		The MicroEdition-Configuration and MicroEdition-Profile keys
	    			 		are added as specified in the corresponding parameters
	    			 		of the task, or they default to "CLDC-1.0" and "MIDP-1.0",
							or to what has been set using the wtk.cldc.version and wtk.midp.version properties.
	    			 	</li>
					</ul>
					
					Note that the MANIFEST file is always created from scratch, independent
					of the "update" parameter.
		    	</td>

			</tr>

			<tr>
				<td>
		    		update
		    	</td>

				<td>
		    		boolean
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		If set to true, an existing JAD file is updated instead of
		    		creating a new one from scratch. In update mode, the behaviour is
		    		as follows:
		    		
		    		<ul>

						<li>
		    				If a JAR file is specified, the MIDlet-Jar-URL and MIDlet-Jar-Size
							attributes are modified. Note that the "deploy" parameter
				    		also has an effect on the MIDlet-Jar-URL attribute.
					    </li>

						<li>
		    				If one of the name, vendor or version attributes is specified,
		    				it overrides the one already present in the JAD file.
					    </li>

						<li>
		    				If at least one MIDlet is specified using the sub-element described
		    				below, the whole list of MIDlets in the existing JAD file is cleared.
					    </li>

						<li>
		    				If an attribute is specified using the sub-element described below, it
		    				overrides an existing attribute in the JAD file.
					    </li>

					</ul>
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
		    		A URL to which the MIDlet suite shall be deployed at a later
		    		point. If specified, this URL will prefix the JAR file name
		    		in the MIDlet-Jar-URL. The URL must not end with a slash,
		    		because one is added automatically.
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
		    		The name of the MIDlet suite, that is, the value of the MIDlet-Name
		    		attribute.
		    	</td>
			</tr>

			<tr>
				<td>
		    		vendor
		    	</td>

				<td>
		    		string
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		The vendor of the MIDlet suite, that is, the value of the MIDlet-Vendor
		    		attribute.
		    	</td>

			</tr>


			<tr>
				<td>
		    		version
		    	</td>

				<td>
		    		string
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		The version of the MIDlet suite, that is, the value of the MIDlet-Version
		    		attribute.
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
		    		If true, the task attempts to create a new version number for the
		    		MIDlet suite. If no MIDlet-Version key exists, version "1.0.0" is
		    		assigned. Otherwise, the last of the three numbers is increased by
		    		one (assuming some major.minor.micro scheme).
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
		    		Specifies the encoding to use when reading or writing the JAD and
		    		MANIFEST files. Defaults to the platform default encoding, when
		    		no specified (this might change to UTF-8 in the future).
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

		<h3>Midlet</h3>

		The task allows to specify an arbitrary number of MIDlets using a nested element 
		"midlet". This element element provides the following parameters (note that there
		is no means to specify a MIDlet number. The MIDlets are numbered automatically
		instead in the order in which they are specified):

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

		    		name
		    	</td>

				<td>
		    		string
		    	</td>

				<td>
		    		yes
		    	</td>

				<td>

		    		The MIDlet's name.
		    	</td>
			</tr>

			<tr>
				<td>
		    		icon
		    	</td>

				<td>
		    		String
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		An icon for the MIDlet, specified as a path relative to the
		    		root of the JAR file.
		    	</td>
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
		    		The name of the main MIDlet class.
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
		    		Provides fine-grained control over the MIDlets based on
		    		properties. The MIDlet will only make it to the JAD
		    		file if the given property is defined.
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
		    		Provides fine-grained control over the MIDlets based on
		    		properties. The MIDlet will only make it to the JAD
		    		file if the given property is not defined.
		    	</td>
			</tr>

		</table>

		<p />

		<h3>Attribute</h3>

		The task also allows to specify an arbitrary number of attributes using a nested
		element "attribute". This element provides the following parameters:

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
		    		name
		    	</td>

				<td>
		    		string
		    	</td>

				<td>
		    		yes
		    	</td>

				<td>
		    		The attribute name.
		    	</td>
			</tr>

			<tr>

				<td>
		    		value
		    	</td>

				<td>
		    		String
		    	</td>

				<td>
		    		no
		    	</td>

				<td>
		    		The attribute value. If you don't specify this parameter, the
		    		given attribute is removed from the JAD file instead.
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
		    		Provides fine-grained control over the attributes based on
		    		properties. The attribute will only be copied to the JAD
		    		file if the given property is defined.
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
		    		Provides fine-grained control over the attributes based on
		    		properties. The attribute will only be copied to the JAD
		    		file if the given property is not defined.
		    	</td>
			</tr>

		</table>

		<p />

		<hr />
</BODY>
</HTML>


