
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
		<?php require_once('header.php')?>

		<a name="sign" />
		<h2>Sign</h2>
			WtkSign allows midlet signing (Contributed by Omry Yadan)
		<p />

		The task provides the following parameters:
		
		<p />
		
		<table class="color">
			<tr>
				<th>Parameter</th>
				<th>Type</th>
				<th>Required</th>
				<th>Purpose</th>
			</tr>

			<tr>
				<td>keystore</td>
				<td>file</td>
				<td>no, defaults to $HOME/.keystore</td>
				<td>The location of the key-store file</td>
			</tr>
			<tr>
				<td>storetype</td>
				<td>string</td>
				<td>no, defaults to KeyStore.getDefaultType()</td>
				<td>keystore type</td>
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
		    	    The JAD file to sign.
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
		    		yes
		    	</td>

				<td>
		    	    The JAR file to sign.
		    	</td>
			</tr>

			<tr>
				<td>
		    		certalias
		    	</td>

				<td>
		    		string
		    	</td>

				<td>
		    		yes
		    	</td>

				<td>
					The certificate alias
		    	</td>
			</tr>
			

			<tr>
				<td>
		    		storepass
		    	</td>

				<td>
		    		String
		    	</td>

				<td>
		    		no (defaults to empty)
		    	</td>

				<td>
					The key-store password
		    	</td>
			</tr>

			<tr>
				<td>
		    		certpass
		    	</td>

				<td>
		    		String
		    	</td>

				<td>
		    		no (defaults to empty)
		    	</td>

				<td>
					The certificate password (inside the keystore)
		    	</td>
			</tr>
			
			<tr>
				<td>
		    		certnum
		    	</td>

				<td>
		    		Integer
		    	</td>

				<td>
					no (defaults to 1)
		    	</td>

				<td>
					The certificate index
		    	</td>
			</tr>
			
			<tr>
				<td>
		    		jadencoding
		    	</td>

				<td>
		    		String
		    	</td>

				<td>
					no (defaults to UTF-8)
		    	</td>

				<td>
					The encoding used when writing the JAD file
		    	</td>
			</tr>			
			
		</table>

<p>Usage:</p>
<p>
<pre>
&lt;wtksign 
	keystore="${keystore.file}" 
	jarfile="${jar.name}" 
	jadfile="${jad.name}"
	storepass="${keystore.pass}" 
	certpass="${cert.pass}" 
	certalias="${cert.alias}"
/&gt;
</pre>
</p>	
<p>
	
		
		<hr />
</BODY>
</HTML>


