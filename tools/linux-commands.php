<h1> Linux Commands </h1>
	<p>
		Examples of frequently used Linux shell commands for quick reference
	</p>
	
	<!-- ############## -->
	<h2>Compression & Extraction</h2>

	<code > tar -cvf  output.tar  FOLDER </code>

	<p>
		Tar compress folder [<a target="_new" href="http://man7.org/linux/man-pages/man1/tar.1.html">tar</a>]

	</p>
	
	<code > tar -xvf  output.tar  </code>

	<p>
		Tar DEcompress folder [<a  target="_new" href="http://man7.org/linux/man-pages/man1/tar.1.html">tar</a>]

	</p>
	
	<code > tar -jcvf  output.bz2  --exclude=data FOLDER </code>

	<p>
		Compress folder using bzip2 while excluding "data" subfolder 
		<ul>
			<li>"-c" means compress</li>
		</ul>
	</p>
	
	<code > zip output.zip FOLDER/*  </code>

	<p>
		Zip folder [<a  target="_new" href="http://linux.die.net/man/1/zip">zip</a>]

	</p>
	<!-- ############## -->
	
	<!-- ############## -->
	<h2>Sorting</h2>

	<code > sort textfile.txt | uniq </code>

	<p>
		Sort and Remove duplicate lines from text file [<a  target="_new" href="http://man7.org/linux/man-pages/man1/sort.1.html">sort</a>, <a  target="_new" href="http://man7.org/linux/man-pages/man1/uniq.1.html">uniq</a>]
		<ul>
			<li>"uniq -u" will print unique lines only</li>
		</ul>
	</p>
	<!-- ############## -->
	
	<!-- ############## -->
	<h2>Word counting</h2>

	<code >wc -w textfile.txt </code>

	<p>
		Count number of words in textfile.txt [<a target="_new" href="http://man7.org/linux/man-pages/man1/wc.1.html">wc</a>]
		<ul>
			<li>"wc -l" will print number of lines in file</li>
			<li>"wc -c" will print number of characters in file</li>
		</ul>
	</p>
	<!-- ############## -->

	<!-- ############## -->
	<h2>Search in files (Grep)</h2>

	<code >grep  "the" textfile.txt </code>

	<p>
		Find and print occurrences of "the" in textfile.txt [<a target="_new" href="http://man7.org/linux/man-pages/man1/grep.1.html">grep</a>]

	</p>
	
	<code >grep -P "[0-9]+" yearly.stats.txt</code>

	<p>
		Find and print all lines containing numbers in textfile.txt using perl Regular Expression "[0-9]+" [<a target="_new" href="http://man7.org/linux/man-pages/man1/grep.1.html">grep</a>]
		<ul>
			<li>adding "-o" will print only the numbers not the full lines</li>
		</ul>
	</p>
	<!-- ############## -->
	
	<!-- ############## -->
	<h2>Search for files</h2>

	<code >find .  -name "*hadoop*"  </code>

	<p>
		Find and print all files names containing the word "hadoop" in current directory and all sub directories  [<a target="_new" href="http://man7.org/linux/man-pages/man1/find.1.html">find</a>]
		<ul>
			<li>"." means current directory</li>
			<li>Omitting first "*" will make the search in the current directory only</li>
		</ul>
	</p>
	
	<code >find . -type f -name 'CERTIFICATE*.pdf' -execdir cp {} /PATH/printing/{} \; </code>

	<p>
		Find all files containing the word "CERTIFICATE" and copy them into the following path "/PATH/printing/"
		<ul>
			<li>"{}" refers to any file found</li>
		</ul>
	</p>
	<!-- ############## -->	
	
	
	<!-- ############## -->
	<h2>File head and tail</h2>

	<code >head textfile.txt </code>
	<code >tail textfile.txt </code>
	<p>
		Show first (head) and last (tail) 10 lines in textfile.txt [<a target="_new" href="http://man7.org/linux/man-pages/man1/head.1.html">head</a>]
		
	</p>
	<!-- ############## -->	
	
	
	
	
	<!-- ############## -->
	<h2>Set environment variables</h2>

	<code>export PATH=$PATH:/NEW_PATH</code>

	<p>
		Append a new folder to "PATH" environment variable [<a target="_new" href="http://linux.die.net/man/5/exports">export</a>]
		
	</p>
	<!-- ############## -->	
	
	
	<!-- ############## -->
	<h2>Restart Linux service</h2>

	<code>
	sudo service network-manager restart
	</code>

	<p>
		Restart network-manager service [<a target="_new" href="http://linux.die.net/man/8/service">service</a>]
		
	</p>
	<!-- ############## -->	
	
	
	<!-- ############## -->
	<h2>Add user to group</h2>

	<code>
	sudo usermod -g vboxusers karim
	</code>

	<p>
		Add user "karim" to "vboxusers" group  [<a target="_new" href="http://linux.die.net/man/8/usermod">usermod</a>]
		
	</p>
	<!-- ############## -->	
	
	<!-- ############## -->
	<h2>Make files executable (Runnable) </h2>

	<code>
		sudo chmod +x file.sh
	</code>

	<p>
		Make file.sh executable [<a target="_new" href="http://linux.die.net/man/1/chmod">chmod</a>]
		
	</p>
	<!-- ############## -->	
	
	
	<!-- ############## -->
	<h2>Change file ownership </h2>

	<code>
		sudo chown karim:karimgroup file.sh
	</code>

	<p>
		Change ownsership of file.sh to user "karim" and group "karimgroup" [<a target="_new" href="http://linux.die.net/man/1/chown">chown</a>]
		
	</p>
	<!-- ############## -->	
	
	<!-- ############## -->
	<h2>Access remote Linux machine using SSH</h2>

	<code>
		ssh karim@machine_host.com
	</code>

	<p>
		Login to machine_host.com linux machine using "karim" username  [<a target="_new" href="http://linux.die.net/man/8/ssh">ssh</a>]
		
	</p>
	<!-- ############## -->	
	
	<!-- ############## -->
	<h2>Show total memory used</h2>

	<code>
		free -m
	</code>

	<p>
		 [<a target="_new" href="http://linux.die.net/man/8/free">free</a>]
		
	</p>
	<!-- ############## -->	
	
	
	

	
	<!-- ############## -->
	<h2>Join two files horizontally using [<a target="_new" href="http://linux.die.net/man/1/paste">paste</a>]</h2>

	<code>
		paste -d "|" FILE1.txt  FILE2.txt > FILE3.txt
	</code>

	<p>
	Write lines consisting of the sequentially corresponding lines from each FILE
		<ul>
			<li>"-d" means delimiter</li>
		</ul>
		
	</p>
	<!-- ############## -->	
	
	<!-- ############## -->
	<h2>Join two files vertically using [<a target="_new" href="http://linux.die.net/man/1/cat">cat</a>] </h2>

	<code>
		cat FILE1.txt  FILE2.txt > FILE3.txt
	</code>

	<!-- ############## -->	
	
	
	<!-- ############## -->
	<h2>Compare two sorted files and show the differences using [<a target="_new" href="http://linux.die.net/man/1/comm">comm</a>]</h2>

	<code>
		comm -3 FILE1.txt FILE2.txt
	</code>

	<p>
		<ul>
			<li>"-3" means suppress common lines</li>
		</ul>
		
	</p>
	<!-- ############## -->	
	
	
		<!-- ############## -->
	<h2>Convert text file to lowercase using [<a target="_new" href="http://linux.die.net/man/1/tr">tr</a>]</h2>

	<code>
		cat FILE.txt |  tr '[:upper:]' '[:lower:]
	</code>

	<p>

		
	</p>
	<!-- ############## -->	
	
	
	<!-- ############## -->
	<h2>Get execution time of a Linux command using [<a target="_new" href="http://linux.die.net/man/1/time">time</a>]</h2>

	<code>
		time GET http://test.com > /dev/null
	</code>

	<p>
		<ul>
			<li> "&gt; /dev/null" is used to suppress GET command output</li>
		</ul>
		
	</p>
	<!-- ############## -->		
	
	
	<!-- ############## -->
	<h2>List contents of jar file</h2>

	<code>
		jar tf  FILE.jar
	</code>

	<p>

		
	</p>
	<!-- ############## -->			


	<!-- ############## -->
	<h2>Split large files [<a target="_new" href="http://linux.die.net/man/1/split">split</a>]</h2>

	<code>
		split -l 100 INPUT_FILE.txt OUTPUT_FILE_PREFIX.txt 
	</code>

	<p>
		Split INPUT_FILE to multiple files 100 lines each
		
	</p>
	<!-- ############## -->		

	<!-- ############## -->
	<h2>Remove first or last line from file [<a target="_new" href="http://linux.die.net/man/1/tail">tail</a>]</h2>

	<code>
		head -n NUM_OF_LINES_MINUS_ONE INPUT.TXT  &gt;  OUTPUT.TXT <br>
		tail -n NUM_OF_LINES_MINUS_ONE INPUT.TXT  &gt;  OUTPUT.TXT
	</code>

	<p>
		First command will remove last line, Second command will remove first line
		
		
		<ul>
			<li>"NUM_OF_LINES_MINUS_ONE" should be the number of lines in the file minus one - use wc -l to get it</li>
		</ul>
		
	</p>
	<!-- ############## -->		


	<!-- ############## -->
	<h2>Show disk usage of first level sub-directories  [<a target="_new" href="http://linux.die.net/man/1/du">du</a>]</h2>

	<code>
		du -h -d 1 .
	</code>

	<p>
		<ul>
			<li>"-h" means human redable (ex: GB instead of long number of bytes)</li>
			<li>"-d" is the depth of folders to show</li>
		</ul>
		
	</p>
	<!-- ############## -->		

	
	
	<!-- ############## -->
	<h2>TASKS: Sending HTTP Form post request using [<a target="_new" href="https://curl.haxx.se/docs/manpage.html">curl</a>] </h2>

	<code >curl -F "account_login=6pd9vkgk" -H "Content-Type: application/x-www-form-urlencoded"  https://URL </code>

	<p>
		<ul>
			<li>"application/x-www-form-urlencoded" is the header for HTTP form</li>
			<li>"account_login=6pd9vkgk" is the form payload</li>
		</ul>
	</p>
	<!-- ############## -->
	
	<!-- ############## -->
	<h2>TASKS: Sniff your web traffic using tcpdump  [<a target="_new" href="http://www.tcpdump.org/tcpdump_man.html">tcpdump</a>] </h2>

	<code>sudo tcpdump -i wlan0  -A port 80 -s 0 </code>

	<p>
		<ul>
			<li>"wlan0" means your wifi card, change it to eth0 or other for your LAN</li>
			<li>"80" is the HTTP port for web traffic</li>
		</ul>
	</p>
	<!-- ############## -->	
	
	<!-- ############## -->
	<h2>TASKS: PORT forwarding from port 8889 to port 8888  [<a target="_new" href="http://linux.die.net/man/1/nc">nc</a>] </h2>

	<code>mkfifo httpPIPE <br>
		  nc -q -1 -l 8889 0&lt;httpPIPE | nc -q -1 localhost 8888 1&gt;httpPIPE
	</code>

	<p>
		<ul>
			<li>put httpPIPE in standard input "0" and put standard output "1"  in httpPIPE</li>
			<li>"-q" will prevent quiting after EOF, will wait forever  </li>
		</ul>
	</p>
	<!-- ############## -->	

	<!-- ############## -->
	<h2>TASKS: Rename all files in current dir, add ".postfix" at the end  [<a target="_new" href="http://linux.die.net/man/1/rename">rename</a>] </h2>

	<code>rename 's/(.*)/$1.postfix/' * </code>

	<p>
		<ul>
			<li>"$1" refers to the original filename</li>
		</ul>
	</p>
	<!-- ############## -->		
	
	
	
	<!-- ############## -->
	<h2>TASKS: Sending email from command line  [<a target="_new" href="http://linux.die.net/man/8/sendmail.sendmail">sendmail</a>] </h2>

	<code> echo "YOUR_MESSAGE" | mail -s "SUBJECT" TARGET_EMAIL@gmail.com</code>

	<p>
		<ul>
			<li>Make sure you have sendmail installed "sudo apt-get install sendmail"</li>
		</ul>
	</p>
	<!-- ############## -->		
	

	<!-- ############## -->
	<h2>TASKS: Download full website [<a target="_new" href="https://www.gnu.org/software/wget/manual/wget.html">wget</a>] </h2>

	<code> wget  --recursive  --wait=2 -U "Mozilla" -p -H http://twitter.com </code>

	<p>
		<ul>
			<li>--wait will wait for 2 seconds between page downloads</li>
			<li>-U for user agent</li>
			<li>-p and -H are needed to download all pages linked to index page even if in different subdomain</li>
		</ul>
	</p>
	<!-- ############## -->		
	
	
	<!-- ############## -->
	<h2>TASKS: Run a specific file every 30 minutes [<a target="_new" href="http://linux.die.net/man/1/crontab">crontab</a>] </h2>

	<code> 
	crontab -e  <br>
	0,30 * * * * /home/FILE_PATH <br>
	CTRL O <br>
	CTRL X <br>
	</code>

	<p>
		<ul>
			<li>run "crontab -l " to make sure the cronjob is created correctly</li>
			<li>0,30 means minute 0 and minute 30</li>

		</ul>
	</p>
	<!-- ############## -->		
	
	<!-- ############## -->
	<h2>TASKS: Disable word wrapping in terminal [<a target="_new" href="http://linux.die.net/man/1/less">less</a>] </h2>

	<code> 
		cat index.html | less -S
	</code>

	<p>
		<ul>
			<li>-S did the job</li>

		</ul>
	</p>
	<!-- ############## -->		


	<!-- ############## -->
	<h2>TASKS: Count lines of code in a directory [<a target="_new" href="http://linux.die.net/man/1/less">less</a>] </h2>

	<code style="width:600px"> 
		rm -rf temptotal.txt; find . -regex ".*.\(php\|html\|css\|js\)"  -not  -path "./libs/*" | xargs  -I FILE  sh -c "echo FILE; cat FILE | tr -d '\t' | tr -s '\n\n' '\n' | wc -l   " | xargs -I COUNT sh -c "echo COUNT;echo COUNT >> temptotal.txt"   ; echo "Total:" ;  cat temptotal.txt | awk '{ sum+=$1} END {print sum}'; rm -rf temptotal.txt;
	</code>

	<p>
		Count lines of code in files with php,html,css,js extentions excluding "libs" folder"
		<ul>
			<li>The code removes double end lines "\n\n" before counting</li>

		</ul>
	</p>
	<!-- ############## -->		

	<!-- ############## -->
	<h2>TASKS: Delete files that have more than 2MB of data [<a target="_new" href="http://linux.die.net/man/1/rm">rm</a>,<a target="_new" href="http://linux.die.net/man/1/xargs">xargs</a>] </h2>

	<code> 
		sudo find /YOUR/FOLDER_PATH -size +2M | xargs rm -rf
	</code>

	<p>
		First find files with 2MB+ size and then pass each one to "rm" command to be deleted 
		<ul>
			<li>xargs is used to pass each file to rm as a parameter</li>
			<li>WARNING: make sure you are in the right folder since "-rf" will delete files without confirmation</li>

		</ul>
	</p>
	<!-- ############## -->		



	<!-- ############## -->
	<h2>TASKS: Show memory usage by process [<a target="_new" href="http://linux.die.net/man/1/ps">ps</a>] </h2>

	<code style="width:600px"> 
		ps -e -orss=,args=,command,user,pid | sort -b -k1n | awk '{ hr=($1/1024)/1024 ; printf("%13.2f GB ",hr) } { for ( x=2 ; x<=NF ; x++ ) { printf("%s ",$x) } print "" }'
	</code>

	<p>
	
	</p>
	<!-- ############## -->		


	<!-- ############## -->
	<h2>TASKS: Print second line from CSV file [<a target="_new" href="http://linux.die.net/man/1/ps">ps</a>] </h2>

	<code> 
		cat file.csv | awk  -F ","   '{ print $2 }' 
	</code>

	<p>
		<ul>
			<li>For this example columns are assumed to be separated by ","</li>

		</ul>
	</p>
	<!-- ############## -->		



	<!-- ############## -->
	<h2 style="width:600px">TASKS: Mail forwarding from root local mail to external email address using sendmail </h2>

	<code> 
		echo "root: you@yourmail.com" >> /etc/aliases && newaliases
	</code>

	<p>
		<ul>
			<li>"newaliases" is used to rebuild alias DB </li>

		</ul>
	</p>
	<!-- ############## -->		


	<!-- ############## -->
	<h2>TASKS: Convert PDF file pages to JPG images [<a target="_new" href="http://linux.die.net/man/1/convert">convert</a>]</h2>

	<code> 
		convert -quality 100 -density 122x122 -antialias FILE.pdf FILE_PREFIX-%d.jpg
	</code>

	<p>
		<ul>
			<li>"%d" will be replaced by page numbers</li>

		</ul>
	</p>
	<!-- ############## -->		


	<!-- ############## -->
	<h2>TASKS: Create video(Timelapse) from multiple images using [<a target="_new" href="http://linux.die.net/man/1/ffmpeg">ffmpeg</a>]</h2>

	<code> 
		 ffmpeg  -r 15  -start_number 756 -i 'DSC00%3d.JPG'  VIDEO.mp4
	</code>

	<p>
		<ul>
			<li>"-r 15" is the frame rate per second </li>
			<li>"%3d" will be replaced by image number starting from "756" as indictaed by -start_number  </li>
		</ul>
	</p>
	<!-- ############## -->		



	<!-- ############## -->
	<h2>TASKS: Count and sort duplicates in file  [<a target="_new" href="http://linux.die.net/man/1/sort">sort</a>]</h2>

	<code> 
		 cat FILE.txt  | sort | uniq -c | sort -nr
	</code>

	<p>
		<ul>
			<li>"-nr" means reverse numeric sorting  </li>
		</ul>
	</p>
	<!-- ############## -->		


	<!-- ############## -->
	<h2>TASKS: Record screen session (Screencasting) Audio/Video  [<a target="_new" href="http://linux.die.net/man/1/ffmpeg">ffmpeg</a>]</h2>

	<code> 
		ffmpeg -video_size 1024x768 -framerate 25 -f x11grab -i :0.0 -f pulse -ac 2 -i default ~/output.mkv
	</code>

	<p>

	</p>
	<!-- ############## -->		

	<!-- ############## -->
	<h2>TASKS: convert comma separated file into rows using [<a target="_new" href="http://linux.die.net/man/1/sed">sed</a>]</h2>

	<code> 
		cat INPUT.txt | sed 's/,/\r\n/g'  &gt; OUTPUT.txt 
	</code>

	<p>
		sed will replace all "," with "\r\n" (endlines)
		<ul>
			<li>sed pattern is 's/SEARCH_FOR/REPLACE_WITH/g' </li>
			<li>sed can also be used to clean text files </li>
		</ul>
	</p>
	<!-- ############## -->		


	<!-- ############## -->
	<h2>TASKS: Scrape web pages using [<a target="_new" href="http://linux.die.net/man/1/wget">wget</a>]</h2>

	<code> 
		 wget -q http://test.com -O - | tr -d '\r\n|\n' |  grep -o "&lt;title&gt;[^&lt;]*&lt;/title&gt;" | sed  -r "s|&lt;/?title&gt;||g"
	</code>

	<p>
		Get the title of test.com website
		<ul>
			<li>"-O -" is used to redirect output to stdout instead of file </li>
			<li>"tr -d" will delete endlines to make searching and replacing easier</li>
			<li>grep finds the "title" tag fragment and "sed" will remove the "title" tags keeping tag content</li>
		</ul>
	</p>
	<!-- ############## -->		
<p>&nbsp;</p>		

