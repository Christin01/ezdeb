<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>EZDEB - Help</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome JS-->
    <script defer src="assets/fontawesome/js/all.min.js"></script>
    
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.2/styles/atom-one-dark.min.css">
    <link rel="stylesheet" href="assets/plugins/simplelightbox/simple-lightbox.min.css">

    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/help_theme.css">
</head> 



<body class="docs-page">    
   <header class="header fixed-top">	    
        <div class="branding docs-branding">
		<h1><a style="text-decoration:none; padding-left:17px;"  href="../index.php">EZDEB</a></h1>
            <div class="container-fluid position-relative py-2">
                <div class="docs-logo-wrapper">
					<button id="docs-sidebar-toggler" class="docs-sidebar-toggler docs-sidebar-visible me-2 d-xl-none" type="button">
	                    <span></span>
	                    <span></span>
	                    <span></span>
	                </button>
                </div><!--//docs-logo-wrapper-->
            </div><!--//container-->
        </div><!--//branding-->
   </header><!--//header-->
  

    
    <div class="docs-wrapper">
	    <div id="docs-sidebar" class="docs-sidebar">
		    <nav id="docs-nav" class="docs-nav navbar">
			    <ul class="section-items list-unstyled nav flex-column pb-3">
				    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#build-section"><span class="theme-icon-holder me-2"><i class="fas fa-tools"></i></span>Build from source</a></li>
				    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#install-section"><span class="theme-icon-holder me-2"><i class="fas fa-arrow-down"></i></span>Installation</a></li>
				    <li class="nav-item section-title mt-3"><a class="nav-link scrollto" href="#usage-section"><span class="theme-icon-holder me-2"><i class="fas fa-book-reader"></i></span>Usage guide</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-usage-1">clean</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-usage-2">clearLogs</a></li>
				    <li class="nav-item"><a class="nav-link scrollto" href="#item-usage-3">help</a></li>
					<li class="nav-item"><a class="nav-link scrollto" href="#item-usage-4">hold</a></li>
					<li class="nav-item"><a class="nav-link scrollto" href="#item-usage-5">info</a></li>
					<li class="nav-item"><a class="nav-link scrollto" href="#item-usage-6">install</a></li>
					<li class="nav-item"><a class="nav-link scrollto" href="#item-usage-7">list</a></li>
					<li class="nav-item"><a class="nav-link scrollto" href="#item-usage-8">logs</a></li>
					<li class="nav-item"><a class="nav-link scrollto" href="#item-usage-9">search</a></li>
					<li class="nav-item"><a class="nav-link scrollto" href="#item-usage-10">sync</a></li>
					<li class="nav-item"><a class="nav-link scrollto" href="#item-usage-11">unhold</a></li>
					<li class="nav-item"><a class="nav-link scrollto" href="#item-usage-12">uninstall</a></li>
					<li class="nav-item"><a class="nav-link scrollto" href="#item-usage-13">update</a></li>
					<li class="nav-item"><a class="nav-link scrollto" href="#item-usage-14">version</a></li>
			    </ul>

		    </nav><!--//docs-nav-->
	    </div><!--//docs-sidebar-->
	    <div class="docs-content" style="margin-top: 60px;">
		    <div class="container">
			    <article class="docs-article" id="build-section">
				    <header class="docs-header">
					    <h1 class="docs-heading">Build from source</h1>
					    <section class="docs-intro">
						    <p>Guide to get you started on building EZDEB binary from source.<br><br></p>
							<div class="callout-block callout-block-info">
								<div class="content">
									<h4 class="callout-title">
										<span class="callout-icon-holder me-1">
											<i class="fas fa-info-circle"></i>
										</span><!--//icon-holder-->
										Note
									</h4>
									<p>Ensure you have a properly set-up GO  installation on your system.</p>
								</div><!--//content-->
							</div><!--//callout-block-->
								<p>
								Open a terminal window and execute the following command:<br>
								<div class="docs-code-block">
									<pre class="shadow-lg rounded"><code class="bash hljs">git clone https://gitlab.com/Charlie-117/ezdeb</code></pre>
								</div>
								<br>
								Change into the cloned directory<br>
								<div class="docs-code-block">
									<pre class="shadow-lg rounded"><code class="bash hljs">cd ezdeb</code></pre>
								</div>
								<br>
								Then to build the binary for the application execute the following command: <br>
								<div class="docs-code-block">
									<pre class="shadow-lg rounded"><code class="bash hljs">GOOS=linux GOARCH=amd64 go build -o ezdeb-linux-amd64 main.go</code></pre>
								</div>
								<br>
								That's it! You have successfully built the binary application for ezdeb from source.
								</p>

						</section><!--//docs-intro-->
				    </header>
			    </article><!--//docs-article-->


				<article class="docs-article" id="install-section">
				    <header class="docs-header">
					    <h1 class="docs-heading">Installing ezdeb</h1>
					    <section class="docs-intro">
						    <p>Guide for installing EZDEB on your computer.<br><br></p>
							<div class="callout-block callout-block-info">
								<div class="content">
									<h4 class="callout-title">
										<span class="callout-icon-holder me-1">
											<i class="fas fa-info-circle"></i>
										</span><!--//icon-holder-->
										Note
									</h4>
									<p>Ensure you are on a Debian based distribution.</p>
								</div><!--//content-->
							</div><!--//callout-block-->
								<p>
								Open a terminal window and execute the following command:<br>
								<div class="docs-code-block">
									<pre class="shadow-lg rounded"><code class="bash hljs">sudo curl https://gitlab.com/Charlie-117/ezdeb/uploads/1a5884168c63a89c1d6657d1c978b691/ezdeb-linux-amd64 -o /usr/bin/ezdeb</code></pre>
								</div>
								<br>
								Make the downloaded file executable by running the following command:<br>
								<div class="docs-code-block">
									<pre class="shadow-lg rounded"><code class="bash hljs">sudo chmod +x /usr/bin/ezdeb</code></pre>
								</div>
								<br>
								Verify that "ezdeb" is installed correctly by running the following command:  <br>
								<div class="docs-code-block">
									<pre class="shadow-lg rounded"><code class="bash hljs">ezdeb --help</code></pre>
								</div>
								<br>
								That's it! You have successfully installed ezdeb on your Linux system.
								</p>
						</section><!--//docs-intro-->
				    </header>
			    </article><!--//docs-article-->

				<article class="docs-article" id="usage-section">
				    <header class="docs-header">
					    <h1 class="docs-heading">Usage guide</h1>
					    <section class="docs-intro">
						    <p>Usage guide for using EZDEB, includes help for all commands.<br></p>
							<h5>Ezdeb has the following commands:</h5>
						<div class="table-responsive my-4">
							<table class="table table-bordered">
								<tbody>
								    <tr>
									    <th class="theme-bg-light">clean</th>
									    <td>Cleans temporary deb files</td>
									</tr>
									<tr>
									    <th class="theme-bg-light">clearLogs</th>
									    <td>Clear logs</td>
									</tr>
									<tr>
									    <th class="theme-bg-light">help</th>
									    <td>Help about any command</td>
									</tr>
									<tr>
									    <th class="theme-bg-light">hold</th>
									    <td>Hold packages from updating</td>
									</tr>
									<tr>
									    <th class="theme-bg-light">info</th>
									    <td>Show information about a particular package</td>
									</tr>
									<tr>
									    <th class="theme-bg-light">install</th>
									    <td>Install a package</td>
									</tr>
									<tr>
									    <th class="theme-bg-light">list</th>
									    <td>List all available packages</td>
									</tr>
									<tr>
									    <th class="theme-bg-light">logs</th>
									    <td>Show logs</td>
									</tr>
									<tr>
									    <th class="theme-bg-light">search</th>
									    <td>Search for a package</td>
									</tr>
									<tr>
									    <th class="theme-bg-light">sync</th>
									    <td>Sync the packageList from the remote repository</td>
									</tr>
									<tr>
									    <th class="theme-bg-light">unhold</th>
									    <td>Unhold held packages</td>
									</tr>
									<tr>
									    <th class="theme-bg-light">uninstall</th>
									    <td>Uninstall a package</td>
									</tr>
									<tr>
									    <th class="theme-bg-light">update</th>
									    <td>Update all packages or specific package(s)</td>
									</tr>
									<tr>
									    <th class="theme-bg-light">version</th>
									    <td>Print the version of ezdeb</td>
									</tr>
								</tbody>
							</table>
						</div><!--//table-responsive-->
							<br>
						</section><!--//docs-intro-->
				    </header>

					<section class="docs-section" id="item-usage-1">
						<h2 class="section-heading">clean command</h2>
						<p>The clean command is used for deleting temporary debian packages that were downloaded for installation or updating purposes, running the command will simply delete those temporary files.</p>
						<div class="docs-code-block">
							<pre class="shadow-lg rounded"><code class="bash hljs">
$ ezdeb clean
Cleaning temporary deb files...
No temporary files to delete
</code></pre>
						</div>
					</section><!--//section-->
					
					<section class="docs-section" id="item-usage-2">
						<h2 class="section-heading">clearLogs command</h2>
						<p>The clearLogs command is used for clearing the logs generated through various actions executed by the user.</p>
						<div class="docs-code-block">
							<pre class="shadow-lg rounded"><code class="bash hljs">
$ ezdeb clearLogs
Clearings logs...
Logs cleared
</code></pre>
						</div>
					</section><!--//section-->
					
					<section class="docs-section" id="item-usage-3">
						<h2 class="section-heading">help command</h2>
						<p> The help command is used for printing the usage of commands along with their description.<br>
							<pre><code>Usage: $ ezdeb help &ltcommand_name&gt</code></pre></p>
						<div class="docs-code-block">
							<pre class="shadow-lg rounded"><code class="bash hljs">
$ ezdeb help install
Install a package
Usage: ezdeb install &ltpackage_name&gt

Usage:
  ezdeb install [flags]

Flags:
  -h, --help   help for install
</code></pre>
						</div>
					</section><!--//section-->

					<section class="docs-section" id="item-usage-4">
						<h2 class="section-heading">hold command</h2>
						<p>The hold command is used for holding a package so that it doesn't update when running the update command. This is helpful when we want to lock the current package version for compatibility or some other reasons.
							<pre><code>Usage: $ ezdeb hold &ltpackage_name&gt
	hold command also accepts multiple package names at once</code></pre></p>
						<div class="docs-code-block">
							<pre class="shadow-lg rounded"><code class="bash hljs">
$ ezdeb hold gh
 Package gh held
</code></pre>
						</div>
					</section><!--//section-->

					<section class="docs-section" id="item-usage-5">
						<h2 class="section-heading">info command</h2>
						<p>The info command is used for priting information about a package, it lists various information like name, description, source, repository/link, whether the package is installed or not and whether the package is held or not.
							<pre><code>Usage: $ ezdeb info &ltpackage_name&gt
	info command only supports one package as argument at a time.</code></pre>

						</p>
						<div class="docs-code-block">
							<pre class="shadow-lg rounded"><code class="bash hljs">
$ ezdeb info gh
Package name:  gh
Package description:  gh is GitHub on the command line
Package source:  github
Package Repository:  cli / cli
Installed: Yes
Held: Yes
</code></pre>
						</div>
					</section><!--//section-->

					<section class="docs-section" id="item-usage-6">
						<h2 class="section-heading">install command</h2>
						<p>The install command is used for installing packages, it accepts package names from the package list. It will handle downloading, checking for dependencies and installation of the package.
							<pre><code>Usage: $ ezdeb install &ltpackage_name&gt
	install command supports multiple package names as arguments at once.</code></pre>

						</p>
						<div class="docs-code-block">
							<pre class="shadow-lg rounded"><code class="bash hljs">
$ ezdeb install bottom
 

Installing package  bottom 
downloading 100% |███████████████████████████████████████████████| (1.1/1.1 MB, 3.3 MB/s)        
[sudo] password for acer:     
Reading package lists... Done
Building dependency tree... Done
Reading state information... Done
Note, selecting 'bottom' instead of '/tmp/ezdeb/bottom_0.8.0_amd64.deb'
The following package was automatically installed and is no longer required:
  libgdk-pixbuf2.0-0
Use 'sudo apt autoremove' to remove it.
The following NEW packages will be installed:
  bottom
0 upgraded, 1 newly installed, 0 to remove and 238 not upgraded.
Need to get 0 B/1,186 kB of archives.
After this operation, 3,970 kB of additional disk space will be used.
Get:1 /tmp/ezdeb/bottom_0.8.0_amd64.deb bottom amd64 0.8.0 [1,186 kB]
Selecting previously unselected package bottom.
(Reading database ... 605367 files and directories currently installed.)
Preparing to unpack .../ezdeb/bottom_0.8.0_amd64.deb ...
Unpacking bottom (0.8.0) ...
Setting up bottom (0.8.0) ...
Processing triggers for man-db (2.10.2-1) ...
 

Package  bottom  installed successfully
</code></pre>
						</div>
					</section><!--//section-->

					<section class="docs-section" id="item-usage-7">
						<h2 class="section-heading">list command</h2>
						<p>The list command is used for listing available packages along with their descriptions, by using flags the list command can also be used for listing only installed packages or listing held packages.
							<pre><code>Usage: $ ezdeb list [flags]
	Flags:
	  -l, --held        List only held packages
	  -i, --installed   List only installed packages</code></pre>

						</p>
						<div class="docs-code-block">
							<pre class="shadow-lg rounded"><code class="bash hljs">
$ ezdeb list -i
Listing installed packages

 bottom 
 gh 
 
Total number of installed packages: 2 
</code></pre>
						</div>
					</section><!--//section-->

					<section class="docs-section" id="item-usage-8">
						<h2 class="section-heading">logs command</h2>
						<p> The logs command is used for displaying application action logs, by the usage of flags logs of specific action can also be displayed
							<pre><code>Usage: $ ezdeb logs [flags]
	Flags:
	  -a, --action &ltstring&gt   Show logs for a specific action (install, remove, update, hold, unhold)</code></pre>

						</p>
						<div class="docs-code-block">
							<pre class="shadow-lg rounded"><code class="bash hljs">
$ ezdeb logs -a install
time: 2023-03-20 11:43:56 action: install package: "bottom"
</code></pre>
						</div>
					</section><!--//section-->

					<section class="docs-section" id="item-usage-9">
						<h2 class="section-heading">search command</h2>
						<p>The search command is used for searching packages in the package list, it searches through the package name and package description
							<pre><code>Usage: $ ezdeb search &ltsearch_term&gt</code></pre>

						</p>
						<div class="docs-code-block">
							<pre class="shadow-lg rounded"><code class="bash hljs">
$ ezdeb search bo
Searching through packages...

 bottom   -  Yet another cross-platform graphical process/system monitor 

 Found 1 results 
</code></pre>
						</div>
					</section><!--//section-->

					<section class="docs-section" id="item-usage-10">
						<h2 class="section-heading">sync command</h2>
						<p> The sync command is used for syncing the package list file from the external remote repository</p>
						<div class="docs-code-block">
							<pre class="shadow-lg rounded"><code class="bash hljs">
$ ezdeb sync
Successfully synced the packageList from the remote repository
</code></pre>
						</div>
					</section><!--//section-->

					<section class="docs-section" id="item-usage-11">
						<h2 class="section-heading">unhold command</h2>
						<p>The unhold command is used for unholding held packages so that it can be updated.
							<pre><code>Usage: $ ezdeb unhold &lt;held_package_name&gt;
	unhold command supports multiple package names at once.</code></pre>

						</p>
						<div class="docs-code-block">
							<pre class="shadow-lg rounded"><code class="bash hljs">
$ ezdeb unhold gh
 Package gh unheld
</code></pre>
						</div>
					</section><!--//section-->

					<section class="docs-section" id="item-usage-12">
						<h2 class="section-heading">uninstall command</h2>
						<p> The uninstall command is used for uninstalling installed packages.
							<pre><code>Usage: $ ezdeb uninstall &lt;package_name&gt;
	uninstall command supports multiple package names at once.</code></pre>

						</p>
						<div class="docs-code-block">
							<pre class="shadow-lg rounded"><code class="bash hljs">
$ ezdeb uninstall gh


Uninstalling package gh
[sudo] password for acer:     
Reading package lists... Done
Building dependency tree... Done
Reading state information... Done
The following package was automatically installed and is no longer required:
  libgdk-pixbuf2.0-0
Use 'sudo apt autoremove' to remove it.
The following packages will be REMOVED:
  gh
0 upgraded, 0 newly installed, 1 to remove and 238 not upgraded.
After this operation, 40.7 MB disk space will be freed.
(Reading database ... 605376 files and directories currently installed.)
Removing gh (2.24.3) ...
Processing triggers for man-db (2.10.2-1) ...
 

Package  gh  successfully uninstalled
</code></pre>
						</div>
					</section><!--//section-->

					<section class="docs-section" id="item-usage-13">
						<h2 class="section-heading">update command</h2>
						<p>The update command is used for updating installed packages, by default it updates all packages asking permission to update each package while skipping held packages. The command also supports updating specific packages by taking package names as argument. Thorugh the --check-only flag we can only check for updates and skip updating of packages. The command handles checking, downloading, dependecy satisfying and installation of packages all by itself.

							<pre><code>Usage: $ ezdeb update [package_names]
	Flags:
	  -c, --check-only   Only check for updates</code></pre>

						</p>
						<div class="docs-code-block">
							<pre class="shadow-lg rounded"><code class="bash hljs">
$ ezdeb update
 Checking update for bottom ... 
 Package bottom is up to date
</code></pre>
						</div>
					</section><!--//section-->

					<section class="docs-section" id="item-usage-14">
						<h2 class="section-heading">version command</h2>
						<p>The version command is used for displaying the version of the CLI application</p>
						<div class="docs-code-block">
							<pre class="shadow-lg rounded"><code class="bash hljs">
$ ezdeb version
version 1.0
</code></pre>
						</div>
					</section><!--//section-->


			    </article><!--//docs-article-->

			    <footer class="footer">
				    <!-- TODO: include footer from php -->
			    </footer>
		    </div> 
	    </div>
    </div><!--//docs-wrapper-->
   
       
    <!-- Javascript -->          
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  
    
    
    <!-- Page Specific JS -->
    <script src="assets/plugins/smoothscroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
    <script src="assets/js/highlight-custom.js"></script> 
    <script src="assets/plugins/simplelightbox/simple-lightbox.min.js"></script>      
    <script src="assets/plugins/gumshoe/gumshoe.polyfills.min.js"></script> 
    <script src="assets/js/docs.js"></script> 

</body>
</html> 

