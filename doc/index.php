<html>

		<?php require_once('header.php')?>

		<!-- =============================================================== -->

		<a name="news"/>
		<h2>News</h2>
                <b>Antenna 1.2.1-beta available for download(6/1/2010)</b><br/>
                The 1.2.1 version is now available for download. This release includes some bug fixes 
                and contributed patches:
                <ul>
                  <li>corrected a bug that caused Null Pointer Exception for unknown toolkits</li>
                  <li>modified detection of Java ME SDK 3.0 to work for the Mac version also</li> 
                  <li>corrected a bug that caused the device parameter to WtkRun not to work</li>
                  <li>added support for obfuscator arguments to WtkPackage</li>
                  <li>added support for building libraries to WtkRapc</li>
                  <li>added storetype parameter to WtkSign</li>
                </ul>

		<b>Antenna 1.2.0-beta available for download(26/9/2009)</b><br/>
                The 1.2.0 version is now available for download. It includes a rewrite, with wireless toolkit
                properties moved from code to properties files, and support for a number of toolkits, among 
                them Java ME SDK 3.0. More info on that and the complete list of supported tollkits under
                <a href="setup.php">Setup</a> in the documentation.

                It also includes the following changes in the preprocessor:
                <ul>
                  <li>changed include behavior to inherit changes made by included file.</li>
                  <li>added a NOP #preprocess directive for compatibility with blackberry ant tools.</li>
                </ul>
           
                <b>Antenna 1.2.0-beta available in repository (1/9/2009)</b><br/>
                A new version of Antenna is now available in the repository. No build available yet, so to use it you have to check out from repository and build yourself.
                The main new feature is support for Java ME SDK 3.0 and other toolkits. Toolkit definitions are moved to text files, so you can easily add support for more toolkits yourself.
                The following toolkits are supported by this version:<br/>
                <ul>
                      <li>SUN Java ME SDK 3.0</li>
                      <li>S60 3rd Edition SDK for Symbian OS, Feature Pack 2 v1.1</li>
                      <li>MOTODEV SDK for Java ME v2</li>
                      <li>Nokia Series 40 5th Edition SDK, Feature Pack 1</li>
                      <li>Sony Ericsson WTK2</li>
                      <li>Sprint WTK 3.3.2</li>
                      <li>iDEN SDK 3.0, 4.0 and i730 SDK</li>
                      <li>Sun Wireless Toolkit 1.0, 2.0, 2.1, 2.2, 2.3 and 2.5</li>
                </ul>

		<b>Antenna 1.1.0-beta released (20/6/2008)</b><br/>
		A new preprocessor backend was created by the <a href="http://www.eclipse.org/dsdp/mtj/">MTJ (Mobile tools for Java)</a> team. The new backend (v3) is functionaly identicatl to v2, but uses ANTLR 3.0 for parsing. 
		This enable the inclusion of the preprocessor with MTJ, This porting is required due to legal issues with ANTLR 2.7 license, which is not compatible with Eclipse license.<br/>
		The new preprocesor backend is included as v3, and is now the default for WtkPreprocess (use backendverson="v2" to use the previous version). in addition - a new version of the Preprocessor eclipse plugin is released which uses the new backend as well (Which only works with the new backend).<br/>
		The following bugs have been fixed:<br/>
		<ul> 
			<li>Fixed a bug with the handling of //#elifdef</li>
			<li>Fixed a bug with the Eclipse plugin that causes mess-up of files that uses non UTF-8 encodings</li>
		</ul>
		
		<b>Antenna 1.0.2 released (30/5/2008)</b><br/>
		Changes:
		<ul> 
			<li>Fixes a NullPointerException in WTK package if no jad attribute is excluded from manifest using WtkPackage->exclude_from_manifest</li>
		</ul>
		
		<b>Antenna 1.0.1 and Preprocessor eclispe plugin 1.1.6 relased (25/5/2008)</b><br/>
		
		Changes:
		<ul> 
			<li>Added an option to exclude specific jad attibutes from Manifest (useful if you want to allow users to edit those attributes)</li>
			<li><b>Preprocessor related</b>
			    <ul>
				<li>Its now possible to set the debug level of the wtkpreprocess task directly (debuglevel attribute)</li>
				<li>Added the ability to load symbol files into the preprocessor</li>
				<li>Can now save used a file with the symbols actually used when preprocessing</li>
				<li>Fixed an encoding problem in the preprocessor for non ascii files (Effects both Antenna and the Eclipse plugin)</li>
				<li>Added a parameter to specify devices database directory - devicedbpath</li>
				<li>Preprocessor eclipse plugin: Added UI to select device database directory inside workspace</li>
				<li>Fixed the parser of the devices.xml to properly handle devices which apply to multiple devices (with a device name that is comma separated list of device names)</li>
				<li>Added the ability to override devices in the internal device.xml by putting a file named <b>custom-devices.xml</b> in the working directory or lib directory under the working directory</li>
				<li>Fixed //#if to treat symbols with the strings "true" and "false" as boolean values</li>
				<li>Fixed parse errors in some cases in the expand directive</li>
				<li>Fixed parse errors in some cases in the include directive</li>
			    </ul>
			</li>
		</ul>
		
		<b>Antenna 1.0.0. is out</b></br>
		This is a bugfix release of 0.9.15, the bump in version number is due to a mistake with the version number of the previous release.
		The following things have been fixed:
		<ul>
			<li>fixed to replace ant Ant symbols in preprocessor symbols</li>
			<li>fixed path problem when running preverify on Ubuntu</li>
			<li>fixed a bug with the expand preprocessor directive</li>
			<li>Fixed a bug in the source distrubiton build</li>
			<li>The new preprocessor was moved to a new CVS project (<b>antenna.preprocessor</b>) and is available under LGPL or EPL licenses</li>
		</ul>
		
		
		<b>Antenna 0.9.15-beta is out!</b></br>
		There are several new features and improvements in this release which was contributed by <b>Omry Yadan</b>, who joined the project recently
		<ul>
			<li><a href="wtkpreprocess.php">New preprocessor</a> backend with variables support, as well as device database integration and eclipse plugin</li>
			<li><a href="wtksign.php">WtkSign</a> introduced</li>
			<li>Added the ability to select a JAD from a directory with a UI to <a href="wtkrun.php">WtkRun</a></li>
		</ul>

		<a name="synopsis"/>
		<h2>Overview</h2>
		
		Antenna provides a set of <a href="http://jakarta.apache.org/ant">Ant</a>
		tasks suitable for developing wireless Java applications targeted at the
		<a href="http://java.sun.com/products/midp">Mobile Information Device Profile</a>
		(MIDP). With Antenna, you can compile, preverify, package, obfuscate, and run your
		MIDP applications (aka MIDlets), manipulate Java Application Descriptor (JAD) files,
		as well as convert JAR files to PRC files designed to
		run on the MIDP for PalmOS implementations from <a href="http://java.sun.com/products/midp4palm">Sun</a>
		and <a href="http://pluggedin.palmone.com/regac/pluggedin/Java.jsp">IBM</a>.
		Deployment is supported via a deployment task and a corresponding HTTP servlet
		for Over-the-Air (OTA) provisioning. A small preprocessor allows to generate
		different variants of a MIDlet from a single source.
		
		<p />
		
		Of course you can also do much of that with the
		<a href="http://java.sun.com/products/j2mewtoolkit">J2ME Wireless Toolkit</a>
		or other 
		Java IDEs, but using an Ant script results in a defined and reproducable build
		process that is independent of a particular programming environment. See
		<a href="http://www.javaworld.com/javaworld/jw-10-2000/jw-1020-ant.html">
		this article</a> for an excellent introduction to Ant as well as reasons for using it.
		
		<p />
		
		The Antenna tasks are mostly built around functionality provided by the
		Wireless Toolkit and thus require this software. If you want to make use of
		the obfuscation task, you should have one (or both) of the free
		<a href="http://www.retrologic.com">RetroGuard</a> and
		<a href="http://proguard.sourceforge.net">ProGuard</a> obfuscators on your
		harddisk. Naturally, Ant itself is also needed, where
		version 1.5.0 seems to be the minimum required version as reported by users.
		Antenna works very well in Ant-supportive IDEs like
		<a href="http://www.eclipse.org">Eclipse</a> or
		<a href="http://www.jedit.org">JEdit</a>.

		<p />
		
		Here is a list of tasks contained in the package:
		
		<p />

		<table class="color">
			<tr>
				<th>
		  			Task
		  		</th>

				<th>
		  			Purpose
		  		</th>
			</tr>

			<tr>
				<td>
					<a href="wtkjad.php">WtkJad</a>
				</td>

				<td>
		  		    A task that is able to create new JAD
		  		    files from scratch or update existing ones.
		  		</td>

			</tr>

			<tr>
				<td>
					<a href="wtkbuild.php">WtkBuild</a>
				</td>

				<td>
		  			An extension to Ant's standard javac task that sets
		      		the appropriate bootclasspath allows for preverification.
		        </td>

			</tr>

			<tr>
				<td>
					<a href="wtkpackage.php">WtkPackage</a>
				</td>

				<td>
		    		An extension to Ant's standard jar task that handles
		    		the JAD file correctly and is able to
			    	include complete libraries into the resulting JAR file. It also
			    	allows for preverification and obfuscation of the generated file.
			    </td>
			</tr>

			<tr>
				<td>
					<a href="wtkmakeprc.php">WtkMakePrc</a>
				</td>

				<td>
		    		A task to convert an existing JAR/JAD into a PalmOS PRC
		    		file that can be used with MIDP for Palm OS.
		    	</td>
			</tr>

			<tr>
				<td>
					<a href="wtkrun.php">WtkRun</a>
				</td>

				<td>
		    		A task to run a MIDlet suite contained in a JAR/JAD file
		    		in the Wireless Toolkit's emulator.
		    	</td>
			</tr>

			<tr>
				<td>
					<a href="wtkrapc.php">WtkRapc</a>
				</td>

				<td>
		  		    A task that invokes the BlackBerry <code>rapc</code> compiler, and generates BlackBerry <code>.cod</code> files.
		  		</td>

			</tr>

			<tr>
				<td>
					<a href="wtkpreverify.php">WtkPreverify</a>
				</td>

				<td>
		    		A standalone task for preverifying a set of classes. This task
		    		is normally not needed, since the build and packaging
		    		tasks include the same functionality.
		    	</td>

			</tr>

			<tr>
				<td>
					<a href="wtkobfuscate.php">WtkObfuscate</a>
				</td>

				<td>
		    		A standalone task for obfuscating a JAR file. This task is normally not
		    		needed, since the packaging task includes the same functionality.
		    	</td>
			</tr>

			<tr>
				<td>
					<a href="wtksmartlink.php">WtkSmartLink</a>
				</td>

				<td>
		    		A task for removing unnecessary classes from a JAR file.
		    	</td>
			</tr>

			<tr>
				<td>
					<a href="wtkpreprocess.php">WtkPreprocess</a>
				</td>

				<td>
		    		A simple Java preprocessor, similar to the ones known from C and
		    		other languages, that allows for conditional compilation and
		    		including source files.
		    	</td>
			</tr>

			<tr>
				<td>
					<a href="wtkdeploy.php">WtkDeploy</a>
				</td>

				<td>
		    		A deployment task that allows to put a MIDlet on a remote
		    		Web server for later download.
		    	</td>
			</tr>
			
			<tr>
				<td>
					<a href="wtksign.php">WtkSign</a>
				</td>

				<td>
					A task for signing midlets
		    	</td>
			</tr>
			

		</table>

        <p/>
        

		<h3>Samples</h3>
		
		There are several sample build.xml files in the "samples" subdirectory of the
		Antenna source distribution. These files show how to build the default demo MIDlets
		contained in the Wireless Toolkit and some others. Running the samples is a good way
		to test your setup as well as a good starting point for your own build.xml files.
		

		The Antenna project is hosted on
		<a href="http://www.sourceforge.net/projects/antenna">SourceForge</a> and
		distributed under the <a href="http://www.gnu.org/licenses/lgpl.txt">GNU
		Lesser General Public License</a> (LGPL). You can download the most recent
		version  <a href="http://sourceforge.net/project/showfiles.php?group_id=67420">here</a>.
		
		<p />

		<h3>Mailing List</h3>

	    There's also a mailing list for discussing Antenna.
	    You can subscribe to the list <a href="http://sourceforge.net/mail/?group_id=67420">here</a>,<br/>
	    list archives are available <a href="http://sourceforge.net/mailarchive/forum.php?forum_name=antenna-discussion">here</a>

		<p />

		<a name="contact" />
		<h3>Contact</h3>
		
		If you find Antenna useful, you might want to send a picture postcard
		of your hometown or country telling me so. My surface mail address is:
		Jצrg Pleumann, Amselstrasse 41, D-45472 M�lheim, Germany. E-mails are also
		fine, but don't underestimate the productivity (and ego) boost that a wall
		full of postcards next to my desk will cause. :)
		
		<p />

		<hr />

		<!-- =============================================================== -->

	<a name="bottom" />
</html>
