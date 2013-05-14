<html>

		<?php require_once('header.php')?>

		<!-- =============================================================== -->


		<a name="setup" />
		<h2>Setup</h2>

		Setting up Antenna is rather straightforward. The first thing you want
		to do is either put the Antenna JAR file into Ant's lib directory or your
		classpath. Then there's a number of properties you might want to adjust to
		your needs, either in each build.xml file you use or in a global file that
		is imported in the specific build.xml files. 
        <pre>
&lt;taskdef resource="antenna.properties"/&gt;
		</pre>

		If you don't want to put Antenna into your classpath, the following variant 
		also works:

        <pre>
&lt;taskdef resource="antenna.properties" classpath="full name of Antenna jar file"/&gt;
		</pre>
		
		<h3>Selecting a WTK and APIs for a project</h3>

		All Antenna tasks rely on a property "wtk.home" that points to the directory
		where the Wireless Toolkit has been installed. So, if your WTK resides in
		"c:\Java_ME_platform_SDK_3.0", you need to add the following line to your build scripts:
		
		<p />

		<pre>
&lt;property name="wtk.home" value="c:\Java_ME_platform_SDK_3.0"/&gt;
		</pre>

		Depending on which WTK you are using, a different set of base and
		extension APIs is available for your MIDlets. Antenna automatically detects
		your WTK version and selects APIs according to the following simple rule:
		The default BOOTCLASSPATH consists CLDC and MIDP libraries for your CLDC and 
                MIDP version with no extension APIs. If your want to change these settings, 
                you can do so by using the following properties :

		<p />

		<table class="color">
			<tr>
				<th>Property</th>
				<th>Default</th>
				<th>Purpose</th>
			</tr>
			<tr>
				<td>wtk.cldc.version</td>
				<td>1.0</td>
				<td>Specifies the version of CLDC to use.</td>
			</tr>
			<tr>
				<td>wtk.midp.version</td>
				<td>1.0</td>
				<td>Specifies the version of MIDP to use.</td>
			</tr>
			<tr>
				<td>wtk.mmapi.enabled</td>
				<td>false</td>
				<td>Enables or disables the Multimedia API (MMAPI).</td>
			</tr>
			<tr>
				<td>wtk.wma.enabled</td>
				<td>false</td>
				<td>Enables or disables the Wireless Messaging API (WMA)  1.0 (JSR-120).</td>
			</tr>
			<tr>
				<td>wtk.wma2.enabled</td>
				<td>false</td>
				<td>Enables or disables the Wireless Messaging API (WMA)  2.0 (JSR-205).</td>
			</tr>
			<tr>
				<td>wtk.j2mews.enabled</td>
				<td>false</td>
				<td>Enables or disables the J2ME Web Services API (J2MEWS).</td>
			</tr>
			<tr>
				<td>wtk.bluetooth.enabled</td>
				<td>false</td>
				<td>Enables or disables the J2ME Bluetooth API (JSR-82).</td>
			</tr>
			<tr>
				<td>wtk.java3d.enabled</td>
				<td>false</td>
				<td>Enables or disables the J2ME 3D API (JSR-184).</td>
			</tr>
			<tr>
				<td>wtk.optionalpda.enabled</td>
				<td>false</td>
				<td>Enables or disables the J2ME optional PDA packages (JSR-75).</td>
			</tr>
			<tr>
				<td>wtk.locationservices.enabled</td>
				<td>false</td>
				<td>Enables or disables the J2ME location services API (JSR-179).</td>
			</tr>
			<tr>
				<td>wtk.contenthandler.enabled</td>
				<td>false</td>
				<td>Enables or disables the J2ME content handler API (JSR-211).</td>
			</tr>
			<tr>
				<td>wtk.satsa.enabled</td>
				<td>false</td>
				<td>Enables or disables the J2ME Security and Trust Services API (JSR-177).</td>
			</tr>
			<tr>
				<td>wtk.miapi.enabled</td>
				<td>false</td>
				<td>Enables or disables the J2ME Mobile Internationalization API (JSR-238).</td>
			</tr>
			<tr>
				<td>wtk.ams.enabled</td>
				<td>false</td>
				<td>Enables or disables the J2ME Advanced Multimedia Supplements API (JSR-234).</td>
			</tr>
			<tr>
				<td>wtk.papi.enabled</td>
				<td>false</td>
				<td>Enables or disables the J2ME Payment API (JSR-229).</td>
			</tr>
			<tr>
				<td>wtk.s2dvgapi.enabled</td>
				<td>false</td>
				<td>Enables or disables the J2ME Scalable 2D Vector Graphics API (JSR-226).</td>
			</tr>
			<tr>
				<td>wtk.sipapi.enabled</td>
				<td>false</td>
				<td>Enables or disables the J2ME Session Initiation Protocol API (JSR-180).</td>
			</tr>
			<tr>
				<td>wtk.all.enabled</td>
				<td>false</td>
				<td>Enables all additional libraries (except for CLDC and MIDP) defined for your toolkit.</td>
			</tr>
			<tr>
				<td>wtk.midpapi</td>
				<td>Varies</td>
				<td>
					Sets a totally custom BOOTCLASSPATH. Use this property if the set
					of APIs you need is not covered by the above properties (for
					example because you are using the system libraries provided
					another vendor or you have some important additional libraries).
		    	</td>
			</tr>
		</table>

		<p />

		Please note that the properties for selecting a CLDC and MIDP version also
		set the default values for the "config" and "profile" properties used in the
        WtkJad and WtkPackage tasks. So, if you set the versions properly at the
		beginning of your build.xml file, you normally don't have to deal with
		these values again.

		<p />

               <h3>Supported toolkits</h3>

               Antenna version 1.2.0 has been tested with the following toolkits:
               <ul>
                 <li>SUN Java ME SDK 3.0</li>
                 <li>Sun WTK 2.5.2</li>
                 <li>MOTODEV SDK for Java ME v2</li>
                 <li>Nokia S60 3rd edition FP1</li>
                 <li>Nokia S60 3rd edition FP2</li>
                 <li>Nokia N97 SDK</li>
                 <li>SPRINT WTK 332</li>
                 <li>Samsung_SDK_11 (autodetected as WTK 2.5.2)</li>
                 <li>SonyEricsson WTK 2.5.2</li>
                 <li>Nokia S40 5th Edition SDK Feature Pack 1</li>
                 <li>LG SDK 1.3 for Java ME</li> 
               </ul>
               For backward compatibility also support for older Toolkit's are included: Sun Wireless Toolkit 1.0, 2.0, 2.1, 2.2, 2.3,
               iDEN SDK 3.0, 4.0 and i730 SDK.

               <h3>Adding a new Toolkit</h3>
               You can add a new toolkit to antenna just by editing a text file and adding another. Do like this:
               First you add the new toolkit to the file autodetext.txt (in the res directory). It should look something like this:

               #sony ericsson
               sonyericwtk2;lib/semc_ext_jp8.jar;lib/cldcapi11.jar

               Lines starting with # are comments. The lines defining toolkits should start with the toolkit property filename and then 
               contain a list of files that are unique to this toolkit. File names should be relative to wtk.home.

               Then you add a properties file, in this case sonyericwtk2.properties. It looks something like this:
               <pre>
               name="Sony Ericsson WTK2"
               include=wtk25
               nokiaui=lib/nokiaext.jar
               semc=lib/semc_ext_jp8.jar
               vodafone=lib/vscl21.jar
               </pre>

               The properties you could use are:
               <ul>
                 <li>name: a descriptive name for the toolkit. Use this always.</li>
                 <li>preverifyversion: 1 means WTK 1 style, support only CLDC 1.0, 2 means WTK 2 style, include Target parameter 
                     in preverify command, 3 means WTK 3 style, only add parameter cldc1.0 if cldc 1.0 is used</li>
                 <li>emulator: exe or jar file for emulator</li>
                 <li>cldc10,cldc11: libraries for cldc versions</li>
                 <li>midp10,midp20,midp21: libraries for midp versions</li>
                 <li>include: include another toolkit definition. Useful if the toolkit is an add-on to another toolkit, like WTK 2.5 or Java ME SDK 3.0</li>
               </ul>
               All other properties will be taken for add-on libraries that will be added to classpath if wtk.[propertiy].enabled 
               is true, or if wtk.all.enabled is true.

        <h3>Toolkit support for optional libraries</h3>
		<table class="color">
<tbody>
<tr>
<th>JSR API Support</th>
<th>Antenna property</th>
<th>Sun WTK 2.5</th>
<th>Java ME SDK 3.0</th>
<th>MOTODEV Studio for Java ME</th>
<th>Nokia S60 3rd Edition SDK</th>
<th>Nokia N97 SDK</th>
<th>Nokia S40 5</b><sup><b>th</b></sup><b>ed</th>
<th>Sony Ericsson SDK 2.5</th>
<th>Sprint WTK 3.3.2</th>
<th>LG SDK 1.3 for Java ME</th>
</tr>
<tr>
<td>CLDC version</td>
<td></td><td>1.0,1.1</td><td>1.0,1.1</td><td>1.1</td><td>1.1</td><td>1.1</td><td>1.0, 1.1</td><td>1.0, 1.1</td><td>1.0, 1.1</td><td>1.0, 1.1</td></tr>
<tr>
<td>MIDP version</td>
<td>
</td>
<td>1.0,2.0,2.1</td><td>1.0,2.0,2.1</td><td>2.1(2.0)</td><td>2.0,2.1</td>
<td>2.0,2.1</td><td>1.0,2.0,2.1</td><td>1.0,2.0,2.1</td><td>1.0,2.0,2.1</td>
<td>1.0,2.0,2.1</td>
</tr>
<tr>
<td>JSR 75 PDA</td>
<td>optionalpda</td>
<td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td>
</tr>
<tr>
<td>JSR 82 Bluetooth</td>
<td>Bluetooth</td>
<td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td>
</tr>
<tr>
<td>JSR 135 Mobile Media 1.2</td>
<td>mmapi</td>
<td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td>
<td>x</td>
</tr>
<tr valign="top">
<td>JSR 172 Web Services</td>
<td>j2mews</td>
<td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td>
</tr>
<tr valign="top">
<td>JSR 177 Security and Trust Services</td>
<td>satsa</td>
<td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td>
</tr>
<tr valign="top">
<td>JSR 179 Location</td>
<td>locationservices</td>
<td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td></td><td>x</td><td>x</td><td>x</td>
</tr>
<tr valign="top">
<td>JSR 180 SIP</td>
<td>sipapi</td>
<td>x</td><td>x</td><td>x</td><td>x</td><td></td><td></td><td>x</td><td>x</td><td>x</td>
</tr>
<tr valign="top">
<td>JSR 184 Mobile 3D Graphics</td>
<td>java3d</td>
<td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td>
</tr>
<tr>
<td>JSR 120 WMA 1.0</td>
<td>wma</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td>
<td>x</td>
</tr>
<tr>
<td>JSR 205 Wireless Messaging 2.0</td>
<td>wma2</td>
<td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td>
</tr>
<tr valign="top">
<td>JSR 209 AGUI</td>
<td>agui</td>
<td></td><td>x</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
</tr>
<tr valign="top">
<td>JSR 211 Content Handler</td>
<td>contenthandler</td>
<td>x</td><td>x</td><td>x</td><td></td><td></td><td>x</td><td>x</td><td>x</td><td>x</td>
</tr>
<tr valign="top">
<td>JSR 226 Scalable 2D Vector Graphics</td>
<td>s2dvgapi</td>
<td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td>
</tr>
<tr valign="top">
<td>JSR 229 Payment</td>
<td>papi</td>
<td>x</td><td>x</td><td></td><td></td><td></td><td></td><td>x</td><td>x</td><td>x</td>
</tr>
<tr valign="top">
<td>JSR 234 Advanced Multimedia Supplements</td>
<td>ams</td>
<td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td><td>x</td>
</tr>
<tr valign="top">
<td>JSR 238 Mobile Internationalization</td>
<td>miapi</td>
<td>x</td><td>x</td><td>x</td><td></td><td></td><td></td><td>x</td><td>x</td><td>x</td>
</tr>
<tr valign="top">
<td>JSR 239 Java Binding for OpenGL ES</td>
<td>opengl</td>
<td>x</td><td>x</td><td>x</td><td></td><td></td><td></td><td>x</td><td></td><td>x</td>
</tr>
<tr valign="top">
<td>JSR 256 Mobile Sensor</td>
<td>mobilesensor</td>
<td></td><td>x</td><td></td><td></td><td>x</td><td></td><td></td><td></td><td>x</td></tr>
<tr valign="top">
<td>JSR 257 Contactless Communication</td>
<td>rfid</td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>x</td>
</tr>
<tr valign="top">
<td>JSR 280 XML</td>
<td>xml</td>
<td>
</td>
<td>x</td>
<td>
</td>
<td>
</td><td>
</td><td>
</td><td>
</td><td>
</td><td>
</td> </tr>
<tr valign="top">
<td>JSR 300 DRM</td>
<td>drm</td>
<td>
</td>
<td>
</td>
<td>
</td>
<td>
</td>
<td>
</td>
<td>
</td>
<td>
</td>
<td>
</td>
<td>x</td>
</tr>
<tr valign="top">
<td>G24 MOTO2MOTO</td>
<td>G24</td>
<td>
</td>
<td>
</td>
<td>x</td>
<td>
</td>
<td>
</td>
<td>
</td>
<td>
</td>
<td>
</td>
<td>
</td>
</tr>
<tr valign="top">
<td>Motorola APIs</td>
<td>motorola</td>
<td>
</td>
<td>
</td>
<td>x</td>
<td>
</td>
<td>
</td>
<td>
</td>
<td>
</td>
<td>
</td>
<td>
</td>
</tr>
<tr valign="top">
<td>Nokia UI API</td>
<td>nokiaui</td>
<td>
</td>
<td>
</td>
<td>
</td>
<td>
</td>
<td>x</td>
<td>x</td>
<td>x</td>
<td>
</td>
<td>
</td>
</tr>
<tr valign="top">
<td>eSWT API</td>
<td>eswt</td>
<td></td><td></td><td></td><td></td><td>x</td><td></td><td></td><td></td><td></td>
</tr>
<tr valign="top">
<td>IAP Info</td>
<td>iapinfo</td>
<td></td><td></td><td></td><td></td><td>x</td><td></td><td></td><td></td><td></td>
</tr>
</tbody></table>
		<h3>Using the Websphere Micro Environment Toolkit for PalmOS</h3>
		
		Starting from version 0.9.11, Antenna also supports the PRC converter
		from the <a href="http://pluggedin.palmone.com/regac/pluggedin/Java.jsp">IBM
		Websphere Micro Environment Toolkit for PalmOS</a> (WME). This converter
		is needed to generate PRC files for IBM J9 VM that runs on the new Tungsten devices.
		To use it, specify the WME's home directory as follows:
		
		<pre>
&lt;property name="wtk.wme.home" value="your path goes here"/&gt;
		</pre>
		
		The current release of the WME already supports CLDC 1.1 and MIDP 2.0 plus
		some extension APIs. The MIDP for PalmOS from Sun, in contrast, seems to
		be pretty much dead. Please note that the name of this property has changed
		with Antenna 0.9.12 for reasons of consistency.

		<a name="ota" />
		<h3>Using Over-the-Air provisioning</h3>
		
		In addition to the various Ant tasks, the project also provides a simple
		servlet for OTA provisioning of MIDlet suites. This servlet
		is included in the same ZIP file as the tasks. It allows to upload MIDlet
		suites via the <a href="#deploy">WtkDeploy</a> task. Once uploaded,
		a MIDlet suite can be downloaded by WWW and WAP clients. Lists of
		available suites can be retrieved in HTML and WML. The format of these
		lists can be modified using a template mechanism.
		
		<p />
		
		The following steps are necessary to run the OTA servlet:
		
		<ol>

			<li>
		        Install a servlet-capable Web server, preferredly
		        <a href="http://jakarta.apache.org/tomcat">Tomcat</a>.
		    </li>

			<li>
		        Add a new Web application, for example by creating
		        a directory "antenna" under "&lt;tomcat&gt;/webapps".
		        Create a directory "WEB-INF" and a subdirectory 
		        "WEB-INF/lib" there.
		    </li>

			<li>
		        Copy the "web.xml" file from the "etc" directory of the
		        Antenna source distribution (or from CVS) to "WEB-INF" and
		        adjust it to your personal needs. Copy the "antenna-bin.jar"
		        binary distribution file to "WEB-INF/lib".
		    </li>

			<li>
		        You should have a working configuration now. Test it by
		        starting Tomcat and accessing the servlet using a Web
		        browser or the Wireless Toolkit's OTA provisioning
		        mechanism. If the servlet URL is "http://localhost/antenna",
		        the HTML and WML pages are available as "http://localhost/antenna/index.html"
		        and "http://localhost/antenna/index.wml", respectively. When
		        only the directory is specified, the servlet tries to determine
		        the correct version from the HTTP request headers.
		    </li>

			<li>
		        Test deployment by running the "deploy" sample (modify "build.xml"
		        first).
		    </li>

			<li>
		        To create your own layout for the pages, copy the two files from
		        the "res" directory of the Antenna source distribution (or from CVS)
		        to "WEB-INF" and modify them. There's
		        documentation inside the "index.html" file that tells you how to
		        do this.
		    </li>

		</ol>
		
		If you are running the OTA servlet with modified templates, it would be nice
		if you added a small hyperlink saying "Powered by Antenna" (pointing to the
		project's homepage) to the bottom of the page. Same if you modify the servlet
		itself.

        <p />
        
        A running version of the servlet should be available on 
        <a href="http://pleumann.dyndns.org/antenna">my home machine</a>.
        

		<center>
			<a href="http://sourceforge.net">
				<img src="http://sourceforge.net/sflogo.php?group_id=67420&amp;&amp;type=2" width="125" height="37" border="0" alt="SourceForge.net Logo" />
			</a>
		</center>

	</body>

	<a name="bottom" />
</html>
