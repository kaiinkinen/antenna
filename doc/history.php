
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
		<?php require_once('header.php')?>
		
		<a name="history" />
		<h2>History</h2>
		
		The following table shows the release history of Antenna (recent changes appear in the main page)
		
		<p />

		<table class="color">
			<tr>
				<th width="20%">
		  			Date
		  		</th>

				<th>
		  			Version
		  		</th>

				<th>
		  			Changes
		  		</th>
			</tr>

			<tr>
				<td>
					??
				</td>

				<td>
		    		0.9.16-beta
		    	</td>

				<td>
					Fixed a bug with the #expand directive in the new preprocessor
				</td>
			</tr>
			<tr>
				<td>
					12-May-2007
				</td>

				<td>
		    		0.9.15-beta
		    	</td>

				<td>
					There are several new features and improvements in this release which was contributed by <b>Omry Yadan</b>, who joined the project recently
					<ul>
						<li>New preprocessor backend with variable support, as well as device database integration and eclipse plugin</li>
						<li><a href="#sign">WtkSign</a> introduced</li>
						<li>Added the ability to select a JAD from a directory with a UI to <a href="#run">WtkRun</a></li>
						<li>Added Device task that allow extraction of device specific properties from a devices database file (TODO: document)</li>
					<ul>
				</td>
			</tr>

			<tr>
				<td>
		    		12-Jul-06
		    	</td>

				<td>
		    		0.9.14
		    	</td>

				<td>
					Okay, it's been a while. :-) But version 0.9.14 is finally out,
					mostly thanks to the help of <b>Fred Grott</b>. News are WTK support up
					to version 2.5 as well as support for several other toolkits. 
				</td>
			</tr>

			<tr>
				<td>
		    		29-Aug-04
		    	</td>

				<td>
		    		0.9.13
		    	</td>

				<td>
		    		Added support for WTK 2.2 beta (patch provided by Fred Grott).
		    		Added support for BlackBerry RAPC compiler (courtesy of
		    		Enrique Ortiz). IBM PalmOS PRC converter now uses
		    		jartoprc.exe instead of jad2prc.exe (fixed by  Xiaodan Zhou).
		    		Added some new options to preprocessor (as requested by Steve
		    		Oldmeadow). Possibly some other fixes by people who are not
		    		mentioned here (sorry for that).
		    		<p/>
		    		The next release will feature an improved version of the
		    		preprocessor (sorry for still not having it integrated, Andre). 
				</td>
			</tr>

			<tr>
				<td>
		    		26-Jun-04
		    	</td>

				<td>
		    		-
		    	</td>

				<td>
		    		Number of downloads has passed the mark of 10000 last night.
		    	</td>
			</tr>

			<tr>
				<td>
		    		25-Apr-04
		    	</td>

				<td>
		    		0.9.12
		    	</td>

				<td>
		    		A new release, finally. Don't know why it took so long to
					get this one out. Biggest news is WTK 2.1 and up-to-date
					WME compatibility. Fixed bugs in date formatting and file sorting
					of OTA servlet. Manifest can now go into the JAR in raw,
					unchanged form. Several fixes and optimizations in the preprocessor.
					Working directory is not set to $jdk/bin during
					preverification any longer. Obfuscators don't need to be in $jdk/bin or
					classpath any longer. Fixed a problem with JAD loading and empty lines.
					Classpath for preverifier is quoted if necessary. 
					Credits for this version go to:
					Darryl L. Pierce, Kjell M. Myksvoll, Glenn Engel, Gabriela Chiribau,
					Tore Storødegård, Csaba Kertesz, Elliot Daniel Sumner, Guy Tomer, and Michael Van Meekeren.
		    	</td>
			</tr>

			<tr>
				<td>
		    		02-Dec-03
		    	</td>

				<td>
		    		-
		    	</td>

				<td>
		    		Antenna has been covered in a J2ME article by (German)
		    		<a href="http://www.javaspektrum.de">JavaSpektrum</a>
		    		magazine.
		    	</td>
			</tr>

			<tr>
				<td>
		    		08-Oct-03
		    	</td>

				<td>
		    		0.9.11
		    	</td>

				<td>
		    	    Preprocessor correctly handles #include when a "blind part" is
		    	    encountered (#775880). WtkObfuscate allows to choose
		    	    between ProGuard and RetroGuard, if both are present (#780182).
		    	    WtkJad allows to specifiy encoding for JAD file (#781486). All
		    	    three thanks to Janusz Gregorczyk. Working directory set to
		    	    "&lt;JAVA_HOME&gt;/bin" when calling preverifier. Might resolve strange
		    	    preverification errors some users encountered (thanks
		    	    to Fr&eacute;d&eacute;ric Dubuisson). Allowed to turn off
		    	    -cldc parameter during preverification (#789131) and shortened task
		    	    definition to one line (both courtesy of 
		    	    Jim O'Leary). Fixed small problem with target attribute of WtkJad
		    	    (#798831, thanks to Thiago Le&atilde;o Moreira). Fixed two problems
		    	    with the OTA servlet and the WAP template (both thanks to Werner
		    	    Baumann). All tasks that support classpaths should also support
		    	    references to classpaths now (as noted by Gyula Kun-Szabo). Added
		    	    support for Websphere PRC converter and piped preverifer output to
		    	    Ant console (as suggested by Michael Kroll).
		    	    Encoding for preprocessor file access can be specified (patch by
		    	    Yuri Magrisso). CreateXXX signatures now feature proper class
		    	    of return value instead of Object (thanks to Edwin van Ouwerkerk Moria).
					Order of debugging parameters for emulator[.exe] changed.
		    	    <p />
		    	    Sorry to those whose additions didn't make it into the new version, but
		    	    after more than two months I wanted to have this version released. I'll
		    	    consider your stuff for the next version&nbsp;-&nbsp;promised.
		    	</td>
			</tr>

			<tr>
				<td>
		    		16-Jul-03
		    	</td>

				<td>
		    		0.9.10
		    	</td>

				<td>
					I've somewhat recovered from the &quot;lost notebook&quot; problem.
					The bad news is that I lost some (non-Antenna) code due to not doing backups regularly.
					The good news is that I now have a new and very cool ThinkPad. :) I tried
					to work through the collected mails this evening, incorporated fixes
					and produced a new version. We also have a project logo now, thanks to
					Steve Oldmeadow.
					<p />
					Preserve element in WtkPackage now honors if/unless attributes.
					ProGuard now called with &quot;-dontusemixedcaseclassnames&quot; by default to
					avoid Problems under Windows (both thanks to Elmar Sonnenschein). Provided proper support for
		    		Ant's ZipFileSet et. al to fix bug #739447 (also mapped
		    		libclasspath feature on it, thus saving some code). Fixed stupid
		    		exception in preprocessor when including files. Allowed #include
		    		directive to interpret Ant-style properties (both thanks to Steve
		    		Oldmeadow, too).
		    	</td>
			</tr>

			<tr>
				<td>
		    		15-Jun-03
		    	</td>

				<td>
		    		-
		    	</td>

				<td>
		    	    Unfortunately, my Notebook has been stolen from my Office this
		    	    week. :-( In addition to a number of uncommitted Antenna fixes I
		    	    lost the e-mail of a whole month. Could all the people who mailed me
		    	    regarding Antenna between 10-May-03 and 10-Jun-03 please send
		    	    me these mails again (possibly including responses received from
		    	    me)?
		    	</td>
			</tr>

			<tr>
				<td>
		    		27-Jun-03
		    	</td>

				<td>
		    		-
		    	</td>

				<td>
		    	    I have set up a mailing list for Antenna. The list address is
		    	    &quot;antenna at pleumann.de&quot;. Subscriptions are managed via &quot;antenna-request at pleumann.de&quot;.
		    	    Send a mail with subject &quot;subscribe&quot; to become a member. Due to
		    	    ever-increasing spam problems and my unwillingness to delete dozens of
		    	    garbage messages per day, posting requires list membership. External
		    	    postings will be rejected automatically and without moderation. I will also
		    	    provide a HTML list archive once I find the time.
		    	</td>
			</tr>

			<tr>
				<td>
		    		18-Apr-03
		    	</td>

				<td>
		    		0.9.9
		    	</td>

				<td>
		    	    Added support for "if" and "unless" parameters in all tasks
		    	    and all nested elements (as suggested by Elmar Sonnenschein).
		    	    Build script now compiles against current Ant version. JAD
		    	    task has new parameter for specifying URL for later deployment.
		    	    Various fixes and extensions to the pre- and postprocessing
		    	    tasks (credits for all go to Jay Goldman). Replaced modifed
		    	    MANIFEST.MF created by RetroGuard with original one to get
		    	    rid of signing information (suggested by Kadocsa Tassonyi).
		    	    Added deployment task and OTA servlet.
		    	    
		    	    <p />
		    	    BTW: Is anyone who's better at <a href="http://www.gimp.org">The
		    	    GIMP</a> than me willing to provide a logo for the project?
		    	    Something like an ant with mobile phone or a satellite dish on
		    	    its head...? :-)
		    	</td>
			</tr>

			<tr>
				<td>
		    		31-Mar-03
		    	</td>

				<td>
		    		0.9.8
		    	</td>

				<td>
		    		Fixed typo in WtkRun which hindered remote debugging (thanks to
		    		Tyler Pitchford). Changed JAD/MANIFEST handling so that the
		    		properties copied from a JAD to a MANIFEST.MF are restricted 
		    		to those explicitly allowed by the MIDP 2.0 specification (patch
		    		courtesy of Richard Kunze). Introduced new Ant properties
		    		to specify default BOOTCLASSPATH for all tasks. Fixed bug in
		    		WtkJad task where MANIFEST.MF was written to same file as JAD.
		    		Added possibilities to control extension and indentation of
		    		preprocessed files (suggested by Yuri Magrisso). Dropped
		    		"defaultpackage" option in favor of a generic way to pass
		    		proprietary arguments to obfuscators (suggestion by Janusz
		    		Gregorczyk).
		    		<p />
		    		I also changed the CLASSPATH the preverifier is called with to
		    		cope with problems reported by several people. From now on, the
		    		emptied-out API is used only for RetroGuard. If there are still
		    		problems with preverification (or new ones, which I don't hope),
		    		please tell me!
		    	</td>
			</tr>

			<tr>
				<td>
		    		09-Mar-03
		    	</td>

				<td>
		    		0.9.7
		    	</td>

				<td>
		    		Put quotes around file names passed to external Java and native tools to deal
		    		with spaces in paths (thanks to Robert Virkus, Janusz Gregorczyk, and again to
		    		Andras Salamon). Fixed naming problem in methods dealing with classpath references.
		    		Fixed problem with preverify task not deleting temporary directory. Obfuscator
		    		doesn't need to be in "${wtk.home}/bin" any longer - it can also be in CLASSPATH
		    		(suggested by Janusz Gregorczyk). Added remote debugging support to emulator task
		    		(suggested by Walter Chang), as well as trace options. Made preprocessor resistent
		    		to trailing whitespace or tabs.
		    	</td>
			</tr>

			<tr>
				<td>
		    		12-Feb-03
		    	</td>

				<td>
		    		0.9.6
		    	</td>

				<td>
		    		Preverifier is now called with "-cldc" switch. Fixed a bug with
		    		copying temporary files that resulted in non-verified JARs (thanks
		    		to Doug Johnson and the students from CSE 403). Tasks now check if
		    		"wtk.home" points to proper WTK directory. Added "defaultpackage"
		    		option for ProGuard preverifier (as suggested by Andras Salamon).
		    		Post processing tasks now support "classpathref" and "bootclasspathref"
		    		attributes (via patch provided by Mat Trudel) and are able to
		    		update a JAD file automatically. Fixed several other bugs reported
		    		by users.
		    	</td>

			</tr>

			<tr>
				<td>
		    		29-Dec-02
		    	</td>

				<td>
		    		0.9.5
		    	</td>

				<td>
		    		Removed some differences between documentation and implementation
		    		(aka bugs) of WtkPreprocess.
		    	</td>
			</tr>

			<tr>
				<td>
		    		28-Dec-02
		    	</td>

				<td>
		    		0.9.4
		    	</td>

				<td>
		    		Added preprocessing task. Fixed a NPE problem in the SmartLink
		    		task (thanks to Chris Hyzer). Added support for showing
		    		stdout/stderr of emulated MIDlets (as suggested by Doug Johnson).
		    	</td>
			</tr>

			<tr>
				<td>
		    		21-Dec-02
		    	</td>

				<td>
		    		0.9.3
		    	</td>

				<td>
		    		Added support for ProGuard obfuscator/optimizer. Used platform
		    		path separator where appropriate (thanks again to Andras).
		    		Improved error detection for external programs. Unified interface
		    		for smart linking and obfuscating.
		    	</td>
			</tr>

			<tr>
				<td>
		    		15-Dec-02
		    	</td>

				<td>
		    		0.9.2
		    	</td>

				<td>
		    		Added task for smartlinking/optimizing a JAR file. And, yes, the
		    		supposed "source" ZIP file contained the classes only. :-) Thanks go to
		    		Andras Salamon for pointing this out.
		    	</td>
			</tr>

			<tr>
				<td>
		    		07-Dec-02
		    	</td>

				<td>
		    		0.9.1
		    	</td>

				<td>
		    		Added tasks for JAD/MANIFEST handling and for calling the
		    		emulator. Renamed several elements, most notably WtkCompile
		    		to WtkBuild. Fixed lots of bugs and hopefully introduced
		    		not as many new ones. :-)
		    	</td>
			</tr>

			<tr>
				<td>
		    		01-Dec-02
		    	</td>

				<td>
		    		0.9.0
		    	</td>

				<td>
		    		Initial public release.
		    	</td>
			</tr>
		</table>

		<p />

		<hr />

</BODY>
</HTML>


