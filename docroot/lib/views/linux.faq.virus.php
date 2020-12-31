<?php
if ( !defined('GGL') ) {
    exit(1);
}

$this->load_header();
?>

<main>
  <article>
    <div class="container">
      <header>
        <h1>GNU/Linux virus FAQ</h1>
      </header>

      <h2 id="virus">Should I get anti-virus software for my GNU/Linux box?</h2>

      <p>The problem with answering this question is that those asking it know <em>only</em> operating systems where viruses, trojan-horse programs, worms, nasty Javascripts, ActiveX controls with destructive payloads, and ordinary misbehaved applications are a constant threat to their computing. Therefore, they <em>refuse to believe</em> GNU/Linux could be different, no matter what they hear.</p>

      <p>And yet it is.</p>

      <p>Here's the short version of the answer: No. If you simply <em>never run untrusted executables while logged in as the root user (or equivalent)</em>, all the "virus checkers" in the world will be at best superfluous; at worst, downright harmful.  "Hostile" executables (including viruses) are <em>almost unfindable</em> in the GNU/Linux world&mdash;and no real threat to it&mdash;because they lack superuser authority, and because GNU/Linux admins are seldom stupid enough to run untrusted executables as a superuser, <em>and</em> because GNU/Linux users' <a href="http://linuxmafia.com/~rick/weatherwax.html#1" rel="external">customary and recommended</a> sources for privileged executables enjoy paranoid-grade scrutiny (such that any unauthorised changes would be detected and remedied).</p>

      <p>(Code run with ordinary non-superuser authority will be addressed further down.)</p>

      <p>Here's the long version: <em>Still</em> no. Any program on a GNU/Linux box, viruses included, can only do what the user who ran it can do. Real users aren't allowed to hurt the system (only a superuser account can), so neither can programs they run.</p>

      <p>Because of the distinction between privileged (root-run) processes and user-owned processes, a "hostile" executable that a regular user receives (or creates) and then executes (runs) cannot "infect" or otherwise manipulate the system as a whole. Just as you can delete only your own files (i.e., those you have "write" permission to), executables you run cannot affect other users' (or root's) files. Therefore, although you can create (or retrieve), and then run, a virus, worm, trojan horse, etc., <em>it can't do much</em>. Unless you do so as as superuser. Which it's simple to avoid doing.</p>

      <p>The first "virus" (arguably, actually a trojan or worm) for GNU/Linux was named "<a href="http://math-www.uni-paderborn.de/~axel/bliss/" rel="external">Bliss</a>", created in September 1996 as a proof of concept. If a user executes an infected executable, the viral code appends itself to all executables for which the user has write permission. But thereafter, it can't go anywhere else or do anything else&mdash;and cannot take over (infect) the local machine (or any other): It lacks permission to do so. Nor can the <a href="http://web.archive.org/web/20020802052642/http://www.big.net.au/~silvio/" rel="external">other GNU/Linux / Unix viruses</a> / <a href="http://web.archive.org/web/20011025055053/http://www.proza.cc/worm/worm.html" rel="external">worms</a> / <a href="http://www.cert.org/advisories/CA-1999-02.html" rel="external">trojan horses</a> thus far known. And claims of "Bliss" infections outside deliberate lab-only deployment by virus researchers are, in point of fact, <a href="http://web.archive.org/web/20080525102131rn_1/news.zdnet.co.uk/communications/0,1000000085,2065154,00.htm" rel="external"> considered suspect</a>. New GNU/Linux viruses (such as <a href="http://web.archive.org/web/20031002232732/http://www.securityfocus.com/infocus/1671" rel="external">Simile.D</a>) emerge continually, too. But guess what? They don't go anywhere, either.</p>

      <p>Most people asking this question have no experience with true multi-user systems built around a pervasive, ground-up security model. On their systems, any process the user executes, directly or indirectly, can modify, destroy, or manipulate <em>anything</em> on the system. This is true to a degree even on MS-Windows NT/XP, which <em>tries</em> to be fully multiuser as Unixes are, but has numerous fundamental security flaws (including a user culture that encourages users to routinely run code with local Administrator privilege, a crucial and unnecessary blunder).</p>

      <p>By contrast, on GNU/Linux (or any other Unix), your processes <em>cannot</em> harm the machine (or damage other users' files)&mdash;because you yourself cannot.</p>

      <p>(One sad but still limited exception is Macintosh OS X, where it, inheriting a unique feature of its NeXTStep origins as a proprietary BSD Unix fork, has an /Applications subtree, owned by group "admin", where all non-OS-bundled applications go. This subtree is fully writeable at all times by the main user, who is in group "admin", thus in harm's way from any malware the main user executes as well as from user mishap.  By contrast, changes/additions/removals to the core operating system, which is stored in traditional Unix subtrees, require superuser access.)</p>

      <p>Thus, even a GNU/Linux user who <em>deliberately wants</em> to activate a GNU/Linux virus (trojan horse, worm, or other program designed to do mischief) will have extreme difficulty getting it to circulate. If you're a programmer, try and see.  Viruses aren't difficult to write on GNU/Linux: Write one, run it (as a non-superuser), and watch it bollix your files. <em>But nobody else's, and not any system files.</em></p>

      <p>Three objections are commonly raised to the above argument:</p>

      <p>1) Ah, you say, all you need do is insert "hostile" code into some package that must run with superuser privileges. True, that would work: Just infiltrate the main software-distribution chains. But this is extremely difficult, not just because the distribution chain is well monitored by paranoid technical people, but also because, with open-source code, any odd modifications would be quickly found by the large number of programmers working on the source code, and removed.</p>

      <ul class="browser-default">
        <li>
          <p>For example, on January 21, 1999, it was discovered that the main distribution site of Wietse Venema's key TCP Wrappers package, ftp.win.tue.nl at Eindhoven University, had been site-compromised and the development copy of TCP Wrappers there had been <a href="http://packetstormsecurity.com/9901-exploits/tcpwrapper-backdoor.txt" rel="external">trojaned</a>.  No GNU/Linux distributions were affected because they and other wary observers check PGP signatures on "upstream" source releases, and, in fact, the compromise was detected within hours by Andrew Brown of Crossbar Security, Inc., because he noticed that tcp_wrappers_7.6.tar.gz was unsigned. (The next day, util-linux development release 2.9g at that site was also <a href="http://seclists.org/bugtraq/1999/Jan/286" rel="external">trojaned</a>: exact same outcome.)</p>
        </li>
        <li>
          <p>On September 28, 2002, similarly, the public ftp.sendmail.org server was site-compromised and trojaned source-code packages of sendmail 8.12.6 were offered there&mdash;probably not PGP-signed&mdash;for eight days. Shortly before that, around July 30, 2002, the same thing happened with the OpenBSD Foundation's ftp server and hosted packages of OpenSSH 3.2.2p1, 3.4p1, and 3.4 development source code. This trojaning was caught and corrected in about a day; as in all the other cases, source-code downloaders who <em>check package signatures</em> weren't fooled.
          </p>
        </li>
        <li>
          <p>On December 13, 2007, post-release source tarballs of SquirrelMail 1.4.11 and 1.4.12 on www.squirrelmail.org were <a href="http://lwn.net/Articles/262688/" rel="external">found</a> to have been trojaned by an intruder using a security-compromised developer account to insert a remote-execution backdoor. This deed was (once again) caught by a user noticing that the packages' md5 checksums did not check out. (The inexcusably lax developers only started gpg-signing their releases' md5 sums with the following version, 1.4.13.)</p>
        </li>
        <li>
          <p>On November 8, 2010, release source tarballs of ProFTPD 1.3.3c on ftp.proftpd.org were <a href="http://www.exploit-db.com/exploits/15662/" rel="external">found</a> to have been replaced by a trojaned version. ProFTPD maintainer speculated that intruders used an unpatched flaw in ProFTPD itself, which, given the sorry <a href="http://linuxmafia.com/faq/Network_Other/ftp-daemons.html" rel="external">record</a> of that notoriously buggy software is sadly credible.  Downloader Daniel Austin <a href="http://www.mail-archive.com/proftp-mirrors@proftpd.org/msg00059.html" rel="external">noticed</a> noticed the modification three days later, probably by checking PGP-signatures.</p>
        </li>
        <li>
          <p>On June 30, 2011, release versions of vsftpd version 2.3.4 on vsftpd.beasts.org was (somehow&mdash;not yet clear) <a href="http://lwn.net/Articles/450181/" rel="external">replaced</a> by a trojaned version containing a remote-login backdoor. As before, the substitution was caught by a user noticing the tarball's md5 and sha1 checksums no longer validate against the developer's signature, after the trojaned version had been available for 3 days. (The developer immediately moved to new hosting, so we may never learn how the trojaning occurred.)</p>
        </li>
        <li>
          <p>On or before August 12, 2011, Linux kernel server hera.kernel.org and several related machines (odin1, demeter2, zeus1 and zeus2) were root-compromised via stolen user ssh credentials, which access was then escalated to root-user access through still-undisclosed means, and intruders then installed the Phalanx rootkit to hide themselves.  The compromise was discovered on Aug. 29, 2011, 17 or more days after break-in, and revealed to the public on Aug. 31, 2011. The main kernel source tree was not, and could not be, compromised, because it's stored entirely in sha1-cryptographically-vetted "git" trees.  Those in control of those machines could&mdash;and may&mdash;have replaced downloadable kernel tarballs (compressed source code archives) with trojaned versions.  It should be noted that contents of tampered tarballs would not match the sha1 signatures of git checkouts, hence probably would have been caught in time. Also, the downloadable tarballs aren't used for development (git checkout is); hence the development code would be unaffected.</p>

          <p>To my disappointment, a forensic report on the kernel.org break-in was promised for the first two years after the event, but has never been delivered, and reporters inquiring about that promise (as of 2015) have been receiving no answer.</p>
        </li>
      </ul>

      <p>None of the above intrusions got past gatekeepers into GNU/Linux distributions.</p>

      <p>With <em>binary-only</em> GNU/Linux software (little of which must run with superuser authority), e.g., packages offered by proprietary software companies, you would face the equally daunting task of adulterating the product of a company that realises such intrusions would damage its reputation (unlike in the MS-Windows market, where Microsoft Corporation has repeatedly shipped virus-infected CD-ROMs, and nobody considered that peculiar or unacceptable). Given that have you pulled off such a feat, your virus would then encounter the previously-detailed barriers to its further spread, and thus probably go roughly nowhere (beyond the systems initially infected). And then, the damaged systems would get rebuilt, and the virus would effectively die out.</p>

      <p>(Occasional late arrivals to GNU/Linux from the proprietary world have on rare occasions been found to have built secret backdoors into their own official software releases, presumably not caring about the loss to their reputation.  It seems only fair to help them lose it: On Jan. 9, 2001, security researchers found that Borland/Inprise's SQL database "Interbase" included backdoor access on port 3050/tcp to <a href="https://www.kb.cert.org/vuls/id/247371" rel="external">undocumented service account</a> "LOCKSMITH" with full access to all database objects. In Feb. 2003, Rüdiger Kuhlman, maintainer of instant messaging program mICQ, now known as "climm", introduced obfuscated code into his own program to make it <a href="http://lwn.net/Articles/22991/" rel="external">refuse to run on Debian</a>. One does wonder how many popular proprietary programs on legacy proprietary operating systems have similar hidden code.)</p>

      <p>2) Well then, you say, one might engineer a virus to start out as a user-owned process, but then crack the local security model from the inside.  This approach, too, might work&mdash;if it could be done <em>unobtrusively</em>. At any given time, some of any GNU/Linux (or other Unix) system's dozens of root-owned system binaries will undoubtedly be vulnerable to attack, but viruses and similar code must be small, simple, and unobtrusive. The two goals are incompatible.</p>

      <p>(The possibility <em>does</em> point out why it's important that users understand that they're responsible for processes that run under their user authority: If some untrustworthy code you've downloaded and decided to run backgrounds itself and performs nasty tricks on others and/or hammers away at possible system weaknesses until it finds a way to escalate privilege, it's <em>your fault</em>. So, know the processes listed by "ps uxw", and understand why you're running each.)</p>

      <p>But this brings up another reason why GNU/Linux / Unix systems tend to be hardy: genetic diversity. That is, for virus-like code to spread among GNU/Linux boxes, it must be unfazed by the variety of CPU architectures GNU/Linux supports, and their diversity of software and of configuration. As long as GNU/Linux distributions remain diverse, they will be that much harder a target.</p>

      <p>3) Last, you say, surely sysadmins stupid enough to take dangerous actions as a superuser must be becoming <em>the norm</em> instead of a rarity, given GNU/Linux's current explosive growth&mdash;thus undermining the whole security model. This, too, is true&mdash;but there are powerful forces at work to educate new sysadmins: The administrative tools, themselves, tend to stress that superuser accounts are dangerous and should be used minimally and carefully, as does GNU/Linux's new-user documentation.  Also, those sysadmins resistant to learning this message via such avenues inevitably learn it <em>the hard way</em>, by destroying or crippling their systems repeatedly&mdash;until they learn. In that regard, viruses do not even stand out from the general likelihood of repeatedly destroying one's system, until one learns to <em>not do unwise things as a superuser</em>. The difference between "hostile" executables (such as viruses) and others is academic, when a regular user can <em>already</em> shoot off his/her foot or other vital parts, with one of myriad, brief commands. Put the other way, the same survival skills by which you, as a novice sysadmin, will cease destroying your system directly will also, more generally, dissuade you from <em>doing unwise things as a superuser</em>, thereby incidentally keeping viruses and their kin off your system.</p>

      <p>Or, put a third way, the GNU/Linux community would see no real distinction between novices who (as a superuser) infect their systems (if this should ever happen to significant numbers of them), and those who accidentally type some variation on "rm -rf /" (delete all files) while logged in as as superuser: Both are a result of inexperience and lack of caution.  In both cases, education, attention, and experience are a 100% effective cure.</p>

      <p>The above discussion has centred on the <em>superuser</em> user's actions, and has mostly been variations on the theme of <em>don't run untrusted executables as a superuser</em>. There remains one other option: viruses (and similar things) that <em>don't attempt</em> to affect system binaries or take over entire machines, but instead dwell in a particular user's account and attempt to spread to other user accounts, on that or other machines, via inter-user communication mechanisms such as e-mail. One might imagine, for example, a virus written in "elisp", the macro language of GNU emacs and xemacs, and propagating as attachments to e-mail sent to other emacs users.</p>

      <p>Such an invention would be <em>at worst</em> a nuisance among a few users, as it could affect only users running the same combinations of user software. Further, the Unix community long ago became wary of auto-executing programs/macros, so ultimately this technique would rely on convincing each additional user to <a href="http://linuxtoday.com/news_story.php3?ltsn=2001-09-07-014-20-SC&amp;tbovrmode=1" rel="external"> execute (run) the program</a>/macro, to "infect" his/her files. Also, in the GNU/Linux / Unix world, macros tend to be stored as readable plain text (unlike the case with, say, MS-Word), so that untrustworthy code is difficult to conceal from user scrutiny.</p>

      <p>In these areas, again, viruses wouldn't stand out from the general category of programs another user sends you that you shouldn't run: If a friend mailed you a script that would erase all your files, would you run it? Of course not. In the <em>same</em> sense, you would not automatically run any <em>other</em> executable that landed on your doorstep, from another user&mdash;and GNU/Linux programs will pretty reliably not auto-run them <em>for</em> you (nor even save them with the executable bit still present). If GNU/Linux programs emerge that <em>do</em> auto-execute (e.g.) macros in documents attached to e-mail (as does the combination of MS-Outlook or MS-Outlook Express with MS-Word on Win32 systems), there might be a flurry of viruses transmitted that way, until the foolishness of such a feature becomes obvious to all&mdash;or until only fools run such programs.</p>

      <p>Of course, if a user is unwise enough to execute "malicious" software with non-superuser privilege, it may take other destructive actions, essentially any action the user could take: sending mail (spam, phishing mails, 419 scams, spamvertising, etc.), running unprivileged-port network daemons (e.g., to serve contraband), participating in DDoS attacks, trying to crack remote systems, contaminating the user's files, lurking around spying on the user and waiting to be remotely directed to try the next 0-day privilege-escalation exploit&mdash;literally, anything the user could do. Can this happen? Sure, because those are all things the user himself/herself could do manually or via script. Does this mean there is a "virus" vulnerability? No, it means any code the user chooses to run can do anything he/she could personally, so he/she should be mindful because passing the buck is not an option. What runs under your authority <em>is your responsibility</em>, so pay attention to what you elect to run.</p>

      <p>GNU/Linux systems <em>can</em> be indirectly affected by viruses arising on more-vulnerable systems. If you offer file-sharing services from a GNU/Linux machine to others on its network, such as NFS, Samba, or NetATalk, the other machines might well <em>store</em> infected programs on the shared volumes. (For this reason, sometimes GNU/Linux sysadmins run checkers to catch and remove <em>foreign operating system</em> viruses from shared files, in-transit e-mail, and the like.) Also, the GNU/Linux boot process might be interrupted by operation of (say) a virus originating in MS-Windows, and affecting boot-sensitive areas such as the Master Boot Record. But these are not GNU/Linux viruses, which remain vanishingly rare and (effectively) a harmless curiosity.</p>

      <p>And yet... And yet, the big anti-viral companies such as McAfee and Symantec <em>all</em> hawk anti-viral products for GNU/Linux. Why would they do this, if viruses pose no threat? Because gullible people have money, too, that's why. Such products are sold to the crowds of people who refuse to believe essays like this one. If you feel that way, buy them with pride: It's easier than thinking.</p>

      <p>But then again, maybe you <a href="https://www.ece.cmu.edu/~ganger/712.fall02/papers/p761-thompson.pdf" rel="external">just can't trust anyone</a>. Caveat user.</p>

      <p>For a knowledgeable, but more glass-half-empty, view of Unix viruses, see also <a href="http://web.archive.org/web/20080528010228/http://www.securitymap.net/sdm/docs/virus/unix-virus-459.html" rel="external">Rado Dejanovic's article</a>. Also, <a href="http://www.stratigery.com/virefs.html" rel="external">Bruce Ediger</a> appears to be interested in the same subject. Be sure to check out, also, David F. Skoll's <a href="http://linuxmafia.com/~rick/skoll/" rel="external"> article</a>, especially the hilarious "Challenge" section near the bottom.</p>

      <p>All this is not intended to suggest that system-integrity checkers like <a href="https://www.ossec.net/" rel="external">OSSEC HIDS</a>, <a href="https://la-samhna.de/samhain/" rel="external">Samhain</a>, <a href="http://aide.sourceforge.net/" rel="external">AIDE</a>, <a href="http://www.tripwire.com/" rel="external">Tripwire</a>, and other <a href="http://packetstormsecurity.com/UNIX/IDS/" rel="external">IDSes</a> aren't an excellent idea: Being able to detect unauthorised changes is a very good thing. Ditto the various schemes to "sandbox" untrusted code.</p>

      <p>By the way, the ill-informed <a href="http://slashdot.org/article.pl?sid=00/01/24/1115253" rel="external"> lucubrations</a> of a Slashdot writer to the contrary, there is no such word as "virii". The <a href="http://linuxmafia.com/~rick/faq/plural-of-virus.html" rel="external">plural of this English word is "viruses"</a>. (The word was borrowed and redefined from the Latin word virus = slime, poison, or venom. In Latin, that is a 2nd declension neuter noun, whose nominative plural form is now unclear, since it seems that nobody ever used one&mdash;and it doesn't appear to work like either a standard "-us" or "-um" noun, whose plural behaviours are known. In other words, it doesn't have a Latin plural, possibly because it was a mass noun rather than a countable one.)</p>

      <h2 id="virus2">But didn't security expert Simson L. Garfinkel say that all GNU/Linux systems needed to run virus checkers?</h2>

      <p>Yes. Top security authority Garfinkel, co-author of <a href="http://oreilly.com/catalog/9780596003234/" rel="external">Practical Unix and Internet Security</a> and other classics, <em>did</em> say, in <a href="http://www.simson.net/clips/2000/2000.SecurityFocus.Linux_Viruses.html" rel="external"> a SecurityFocus article</a>, that a plague of viruses are destined to descend upon GNU/Linux, and that the only cure is for all GNU/Linux systems to run "credible anti-virus software".</p>

      <p>Garfinkel acknowledges that the threat he envisions exists only because inexperienced sysadmins "are incredibly promiscuous with the root account", but he thinks running software that compensates for superuser carelessness is an appropriate and adequate remedy.</p>

      <p>Unfortunately, this world-class authority is dead wrong: There is no way that automated "checking" software can ever prevent a careless root user from damaging (or fully destroying) the system. As explained in the prior essay, the remedy is not <em>adequate</em> because viruses are a very minor system threat compared to the extremely broad variety of easy ways a superuser has of damaging/destroying his/her system, and that remedy is not <em>appropriate</em> because it fails to address the underlying, real problem of <em>sysadmins being willing to carry out dangerous actions while logged in as the superuser</em>.</p>

      <p>It is simply not possible to create and run a piece of software sophisticated enough to prevent a superuser from running scripts, system commands, interpreted programs, or any of myriad non-virus executables having destructive potential equal to or greater than that of any virus. Further, such a program would be hostile to the very idea of a superuser account, which is <em>by design</em> supposed to be able to carry out any possible action on the system.</p>

      <p>(And, by the way, what's going to protect you from subverted or just <a href="https://web.archive.org/web/20050729025654/http://news.com.com/Antivirus+insecurity+at+Black+Hat+confab/2100-7355_3-5805750.html" rel="external">dangerously defective</a> <em>virus checkers</em>, themselves wielding superuser authority?  Hmm? And why on <strong>earth</strong> would we entrust our system security to ethically suspect firms who <a href="https://web.archive.org/web/20051201051328/http://www.wired.com:80/news/privacy/0,1848,69601,00.html" rel="external">demonstrably</a>&mdash;and please note that both anti-virus and also commercial security-monitoring firms (with honourable exceptions ClamAV and <a href="https://web.archive.org/web/20051203024312/http://www.businessweek.com/technology/content/nov2005/tc20051129_938966.htm" rel="external">F-Secure</a>) were culpable in that hyperlinked example of corrupt collusion&mdash;have a tendency to sell their own customers down the river?)</p>

      <p>The implication is clear: If a user lacks the judgement to use the root (or other superuser) account safely, the only way to protect the system from that user is for him/her to <em>not have superuser access</em>. After carrying out this remedy to address the <em>real</em> causes of the problem, adding a "virus checker" is neither necessary nor useful.</p>

      <p>It should be noted that there is nothing wrong with lacking superuser access to one's system.  Corporations do that with Unix boxes all the time.  Somebody <em>else</em>, whom you trust to do any rare system administration tasks required, can keep and use your root / other superuser password.</p>

      <p>Is this inconvenient? Possibly. At a minimum, it requires modifying the usual PC-desktop habits of thinking&mdash;e.g., you might have to provide security-hardened remote access to your GNU/Linux box using <a href="http://linuxmafia.com/ssh/" rel="external"> ssh/scp</a>. But that is a good thing, because it allows you to deal with real, fundamental problems in an effective manner. Adopting Garfinkel's would-be solution does not accomplish that.</p>

      <p>(By the way, that prediction of a "coming Linux plague" was in 2000&mdash;many years ago already and still counting.</p>

      <h2 id="virus3">Doesn't the rise of GNU/Linux worms like Ramen, 1i0n, Red Worm, Adore, Cheese, lpdw0rm, and Slapper show that GNU/Linux now has a virus problem?</h2>

      <p>No, they demonstrate that the computer press doesn't understand network security, and reprints <a href="http://www.v3.co.uk/vnunet/news/2115032/bug-watch-linux-safe-attack" rel="external">boilerplate self-promotion from the anti-virus industry</a> in lieu of news and analysis. Saying these display a "virus problem" is like saying a homeowner had a "fire hazard problem" after he/she left his/her home wide open and unoccupied for six months, then burglars finally noticed the house, stole its valuables, and finally torched it.</p>

      <p>To explain: None of these GNU/Linux worms break into systems directly, but rather perform automated "script-kiddie"-style probes for specific obsolete, security-vulnerable network daemon (server) software versions. Typically, those vulnerabilities they seek were found and fixed <em>months or years ago</em>&mdash;and heavily publicised. At which point, everyone with a grain of common sense upgraded.</p>

      <p>If you run a GNU/Linux (or other Unix) system and choose to have it offer network services, especially using overly complex, security-problematic software such as BIND v. 8 and WU-FTPd, it is an elementary fact of life that failing to heed security advisories and update your software when necessary means you may have your valuable business plans and other confidential data stolen or subtly sabotaged. You may find yourself arrested and tried for crimes you seem to have committed using your computer. You may give faceless strangers the means to believably impersonate you for their own purposes. You may see your and (sometimes) your company's reputation injured, and your career in ruins. You may suffer immense financial losses.</p>

      <p>The point? "GNU/Linux worms" don't even rate in the catalogue of disaster you may suffer, if you have given the bad guys a dirt-easy way to seize total control of your system anonymously from anywhere in the world. Thus, people who fixate on the (at best) adding-insult-to-injury threat of "GNU/Linux worms" do not understand the subject of <a href="http://web.archive.org/web/20080427075329/http://security.itworld.com/4352/LWD000829hacking/pfindex.html" rel="external">real network security</a> at all.</p>

      <p>For the sake of completeness, I should also mention that there's nothing GNU/Linux-specific about those "worms": Since the attack is against long-notorious vulnerabilities in widely-used network daemon software, they can be trivially modified to find and exploit such holes on other platforms where those packages run. But really, even that runs the risk of obscuring the real point: "Worm" attacks are not <em>themselves</em> a security issue, but rather one of the lesser consequences that typically result from ignoring <em>real</em> security issues for ludicrous lengths of time.</p>

      <h2 id="virus4">Isn't Microsoft Corporation's market dominance, making GNU/Linux an insignificant target, the only reason it doesn't have a virus problem?</h2>

      <p>Not at all. This question is virus pundits' <a href="http://www.bartleby.com/81/13489.html" rel="external">pons asinorum</a>: If they can't think past this fallacy, don't even try to reason with them, as they're hopelessly mired in rationalisation.</p>

      <p>The speaker's supposition is that virus writers will (like himself/herself) ignore anything the least bit unfamiliar, and attack only the most-common user software and operating systems, thus explaining why Unix viruses are essentially unknown in the field.  This is doubly fallacious: 1. It ignores Unix's dominance in a number of non-desktop specialties, including Web servers and scientific workstations.  A virus/trojan/worm author who successfully targeted specifically Apache httpd GNU/Linux/x86 Web servers would both have an extremely target-rich environment and instantly earn lasting fame, and yet it doesn't happen. (I first made the above comment in 1995; alleged refutals since then, vaguely citing "thousands" of GNU/Linux server hosts, have inevitably turned out, upon examination, to entail doorknob-twisting of default security credentials, exploiting of notoriously security-defective &amp; field-added Web apps, totally unmaintained embedded appliances, or more than one of those&mdash;the point being that the operators had <a href="http://linuxmafia.com/~rick/lexicon.html#moenslaw-security3" rel="external">much more fundamental security problems</a> than "viruses".)</p>

      <p>2. Even aside from that, it completely fails to account for observed fact: Assume that only 1% of Internet-reachable hosts run x86 GNU/Linux (a very conservative figure). Assume that only one virus writer out of 1000 targets Unixes. Then, given the near-instant communication across the Net that at this writing is blitzing my GNU/Linux Web server with dozens of futile probes for the Microsoft "Nimda" vulnerability per second, the product of that one virus writer's work should be a nagging problem on GNU/Linux machines everywhere&mdash;and he/she will be working very hard to achieve that, given the bragging rights he/she would gain. Yet, it's not there. Where is it?</p>

      <p>The answer is that, for various reasons discussed in prior essays, such code is very easy to write, but&mdash;given minimally competent system maintenance (including the automated kind, cited below)&mdash;completely impractical to propagate. And likely to remain so. (It should go without saying that GNU/Linux-based Internet hosts that go unmaintained for long periods of time, e.g., proprietary-embedded-GNU/Linux appliances, will suffer security meltdown eventually, same as with any other operating system.)</p>

      <h2 id="virus5">But how can you say there's no virus problem, when there have been several dozen GNU/Linux viruses?</h2>

      <p>First of all, that's not what I said. (People keep failing to heed what these essays <em>actually say</em>.) I said that GNU/Linux systems' architecture and culture, by design, resist such petty nuisances, and create sufficient default protections that anyone careless enough to be exposed to GNU/Linux "malware" (viruses and such) has bigger and more fundamental worries: By and large, you <a href="http://www.theregister.co.uk/2003/10/06/linux_vs_windows_viruses/" rel="external">can be hit at all only by being really dumb</a>.  By and large, you can suffer <em>system</em> (root) compromise from malware only by being mind-bogglingly dumb.</p>

      <p>Moreover, especially since the year 2000, even reckless, dumb GNU/Linux users have been adequately protected against the consequences of likely types of gross negligence, by automated system updaters.</p>

      <p>Let's get into specifics. Here's a detailed profile of literally all GNU/Linux malware to date (2016):</p>

      <h3>I. ELF Infectors</h3>

      <p>42, Abulia, Alaeda, Arches, Balrog, Bi, Binom, Bliss, Brundle, Bukowski, Caline, Cassini, Caveat, Coin, Cron, Cyneox, Dataseg, DDOSTF (MrBlack), DebiLove, DerFunf, Dido, Diesel, Dummy, Eriz, Eternity, Gildo, Godog, Grip, Gzid, Hasher, Henky, Herderv, Hyp, Jac, JrLinux, Kagob.a, Kagob.b, Kaot, Lacrimae (Crimea), Laurung, Mais, Mandragore, Mixter, Nel, Nemox, Neox, Nf3ctor, Nuxbee, Obsidian.E (Obsid), Orig, OSF (OSF.8759), Ovets, Pavid (Alfa.dr), Penguin, PiLoT, Podloso (iPod), Quasi, RELx, RST = Remote Shell Trojan, Radix, RcrGood, Rike (Rike.1627), Satyr, Sickabs, Siilov, Silvio, Simile (Etap, MetaPHOR), Spork, Staog, Svat, Telf, Thebe, Vit (4096, Vit.4096, Silly), Winter (Lotek, LoTek, Winter.341), Winux (Lindose, PEElf, Pelf), Wit, Wozip, Xone, Ynit, Zariche, and Zipworm (distinctive only in that it likes to infect ELF files in Zip archives).</p>

      <p>These are all "ELF infectors", where "ELF" is the standard Unix binary format. To activate these, you must literally decide to run a binary infected with them, e.g., someone mails you a binary file and says "Please run this not-especially-trustworthy binary executable." Doing so would of course be really dumb; the consequence of being dumb in that particular fashion is that some number of GNU/Linux executable binaries set to be writeable by the user's account would get modified to include a copy of the virus ("infected"). Note that the user is thereby enabled only to shoot at his/her <em>own</em> foot: No regular installed applications could be affected, because those are not writeable by regular users: Only binary executables in that specific user's /home/username/bin/ and such could be affected (and seldom do users have any).</p>

      <p>And, perhaps needless to say, anyone who runs untrustworthy binary executables <em>using a superuser account</em> is a dumb cluck, and hopeless. Further, you really, really have to go out of your way to run them at all: For example, literally none, zero, nada of the <a href="http://linuxmafia.com/faq/Mail/muas.html" rel="external">more than 100 e-mail clients for GNU/Linux</a> auto-execute received executable attachments on the user's behalf. The user would have to save the attachment to /tmp, run "chmod u+x" on it to make it executable, and then manually run it&mdash;in order to (finally) shoot himself/herself (but not his/her system) in the foot.</p>

      <p>Even though the category of "attack" is slightly different, the epic degree of inventive and energetic haplessness that would be required to <em>actually hurt a system</em> with one of these was nicely illustrated by my summaries (<a href="http://www.oreillynet.com/cs/user/view/cs_msg/46829" rel="external">1</a>, <a href="http://www.oreillynet.com/cs/user/view/cs_msg/46832" rel="external">2</a>) of the October 2004 "phishing attack" aimed at Red Hat users.</p>

      <p>One last observation about ELF infectors: They're all fundamentally identical, and might as well all be the same virus. Seen one, seen 'em all. (More to the immediate point: Easily avoid running one, easily avoid running 'em all.)</p>

      <h3>II. Automated Attack Tools against Obsolete Network Daemons</h3>

      <p>This category is the one that former SecurityFocus staffer "Blue Boar" (Ryan Russell, former moderator of the Vuln-Dev security mailing list) cited, on my user group mailing list, in supposed answer to my "Yet, it's not there. Where is it?" rhetorical question (above), asking where's the first virus massively attacking GNU/Linux and making its author famous. In reply, he claimed to have seen Internet-traffic logs proving that "<a href="http://linuxmafia.com/pipermail/conspire/2003-September/000291.html" rel="external">thousands</a>" of Red Hat systems had been infected by "1i0n" and "lpdw0rm".</p>

      <p>Background: Starting with the Sept. 25, 2000 <a href="http://linuxmafia.com/faq/RedHat/releases.html" rel="external">release of Red Hat Linux 7.0</a>, Red Hat, Inc. provided automatic, free-of-charge security updates through its "Red Hat Network" (RHN) service. Much of the discussion that follows will be Red Hat-centric, in part because some or all of the attack tools function only within Red Hat's shell environment and break elsewhere. However, the same network daemons were equally vulnerable at one time on other GNU/Linux distributions and (in many cases), indeed, on other operating systems including MS-Windows (e.g., BIND). The same comments about avoidance apply elsewhere.</p>

      <p>Here are my notes on the "worms" mentioned. ("Worm" in this context is just a scare-word meaning someone's canned remote-attack tool against a piece of network-accessible software your system may or may not have running and exposed to outside connections.)</p>

      <ul class="browser-default">
        <li>
          <p>
            <strong>Name:</strong> 1i0n (lion)<br>
            <strong>Appeared:</strong> March 23, 2001.<br>
            <strong>Vulnerable:</strong> BIND8 prior to 8.2.3, via the "TSIG" exploit of Jan. 29, 2001. Note BIND9 initial release, Sept. 15, 2000; BIND 9.1.0 release, Jan. 17, 2001.
          </p>
        </li>
        <li>
          <p>
            <strong>Name:</strong> lpdw0rm (lpdworm, Kork, Abditive)<br>
            <strong>Appeared:</strong> April 2001.<br>
            <strong>Vulnerable:</strong> Berkeley lpd printing package, via an input validation bug; fixed in lpd's Oct. 2000 release.
          </p>

          <p>Both Berkeley lpd and BIND8 were / are notoriously buggy network daemons, and neither was necessary or recommended unless you were running particular types of server machine. If you decided to run them anyway, pretty much everyone advised you to always stay absolutely current on security fixes.  Fortunately, the above worms were no threat: The holes they attack had already been fixed two and six months earlier, respectively, by the time the worms made their debuts.</p>
        </li>
      </ul>

      <p>Running a known-vulnerable release of BIND8 or lpd was not merely obviously foolhardy, but also difficult to do starting on RH 7.0 and above because of RHN, which would inform even a near-comatose sysadmin that a new security fix is available, and would he/she like it retrieved and installed (Y/n)?</p>

      <p>Moreover, CUPS had long been the preferred successor to lpd by 2000, and ditto the from-scratch-rewritten BIND9 replacement for BIND8, which by version 9.1.0 was quite sound.</p>

      <p>So, being hit by either worm on Red Hat required either still running long-obsolete RH 6.2 (or earlier) with zero maintenance &amp; obsolete network daemons still running, or practically wilfully sabotaging all efforts to make effective maintenance easy and the path of least resistance. And, the fact that Russell trumpeted "thousands" of such systems allegedly having succumbed during those worms' heydays, out of some estimated 10 to 20 million GNU/Linux systems on the Internet in 2001, is conceivably credible but not very impressive.  (Reliable censuses of in-service GNU/Linux machines are notoriously difficult; IDC analyst Dan Kuznetsky <a href="http://www.informationweek.com/story/IWK20010613S0012" rel="external"> estimated</a> in 2001 that GNU/Linux comprised 27% of the then-current market for new server hardware, and deployments had been accelerating for a decade.)</p>

      <p>Then, too, consider the source: Russell seriously claimed that pathetic ELF-infectors RST.A, RST.B, and OSF were "<a href="http://linuxmafia.com/pipermail/conspire/2003-September/000293.html" rel="external">the most successful GNU/Linux viruses [he'd] seen in the wild</a>" and faulted these essays for not having covered them.  Later, when challenged about what "successful" and "in the wild" meant, he admitted that he meant that some (unspecified, small) number of extremely <a href="http://linuxmafia.com/pub/humour/gullibility-virus" rel="external">gullible</a> people, whom he claimed to know, had downloaded supposed software-cracking (or security-cracking) utilities from anonymous underworld strangers (who had virus-infected them) and run those supremely suspect "warez" with root authority.</p>

      <p>(By the way, Russell casually mentioned in that conversation that he leaves himself logged into GNU/Linux desktop machines as the root user as a matter of deliberate policy, saying only "I know what I'm doing", and sees nothing wrong with doing so&mdash;and likewise habitually uses the Administrator login on MS-Windows.  Both are, of course, novice-user bad habits and create needless system risk with little benefit.)</p>

      <p>Such is our famous "virus threat"&mdash;but let's also cover all the other GNU/Linux worms, to date:</p>

      <ul class="browser-default">
        <li>
          <p>
            <strong>Name:</strong> Cheese<br>
            <strong>Appeared:</strong> May 22, 2001.<br>
            <strong>Vulnerable</strong> BIND8 prior to 8.2.3, via the "TSIG" exploit of Jan. 29, 2001. Note BIND9 initial release, Sept. 15, 2000; BIND 9.1.0 release, Jan. 17, 2001.
          </p>

          <p>This is a near-twin of 1i0n; the same comments apply. (Oddly, it seems to have been intended to <a href="http://web.archive.org/web/20041114141103/http://www.linuxsecurity.com/feature_stories/feature_story-90.html" rel="external">repair 1i0n-cracked systems</a>.) Note that the hole that Cheese attacks had already been fixed for four months.</p>
        </li>
        <li>
          <p>
            <strong>Name:</strong> Adore (Red)<br>
            <strong>Appeared:</strong> April 04, 2001.<br>
            <strong>Vulnerable:</strong> LPRng printing package, via an input validation bug discovered December 12, 2000.<br>
            <strong>Vulnerable:</strong> rpc-statd daemon, via an input validation bug discovered August 18, 2000.<br>
            <strong>Vulnerable:</strong> wu-ftpd daemon v. 2.6, via an input validation bug discovered July 7, 2000.<br>
            <strong>Vulnerable:</strong> BIND8 v. 8.2.3, via several buffer overflow and input validation bugs discovered Jan. 29, 2001.
          </p>

          <p>This worm tried a grab-bag of attacks, against four separate server-role packages, all (like those previously discussed) notoriously prone to security holes, <em>but</em> please note that the holes it attacks had already been fixed two, eight, nine, and three months previously, respectively.</p>

          <p>The worm should not be confused with the <a href="http://lwn.net/Articles/75990/" rel="external">Adore aka adore-ng rootkit</a>, which is of course (like other rootkits) not an attack tool but rather an academic example of how to hide after system intrusion.</p>
        </li>
        <li>
          <p>
            <strong>Name:</strong> Ramen<br>
            <strong>Appeared:</strong> January 17, 2001.<br>
            <strong>Vulnerable:</strong> wu-ftpd daemon v. 2.6, via an input validation bug of June 22, 2000.<br>
            <strong>Vulnerable:</strong> rpc.statd daemon, via a bug fixed summer 2000.<br>
            <strong>Vulnerable:</strong> LPRng printing package, via an input validation bug of Aug. 2000.
          </p>

          <p>Notice the pattern? This is a near-twin of Adore, and no more significant: The holes it attacks has already been fixed seven, approximately seven, and five months previously, respectively. And this is what we'll be seeing for all the other worms, time and again. (One anti-virus vendor, Sophos, also speaks in its malware bestiary of an otherwise-unknown November 2001 GNU/Linux worm named "Honeymoo" attacking the same years-obsolete wu-ftpd version that Adore and Ramen did. It might be the same attack code, recycled. It's difficult to tell, given absence of details.)</p>

          <p>(A programmer group named TESO released in April 2002 a slight variant on Ramen named "7350wurm" that attacked a glob() heap corruption bug in wu-ftpd v. 2.6.1, but that glitch had already been fixed for five months.)</p>
        </li>
        <li>
          <p>
            <strong>Name:</strong> Slapper (Cinik, Unlock, bugtraq.c, Apache/mod_ssl worm)<br>
            <strong>Appeared:</strong> Sept. 13, 2002.<br>
            <strong>Vulnerable:</strong> A very specific and rare combination of Apache httpd with OpenSSL 0.9.6d / 0.9.7beta1 or earlier, via an OpenSSL buffer overflow fixed July 2, 2002.
          </p>

          <p>This worm attacks only e-commerce and other SSL-enabled Web sites with particular obsolete versions of OpenSSL and Apache httpd configured in a particular way, and the (exotic) hole it attacks had already been fixed for two months.</p>

          <p>Note: This worm should not be confused with the Internet-crippling January 25, 2003 Microsoft "Slapper" worm, AKA <a href="http://web.archive.org/web/20041009144838/http://www.robertgraham.com/journal/030126-sqlslammer.html" rel="external">SQL Slammer or Sapphire</a>, that within about ten minutes subverted a quarter-million MS-Windows desktop machines running the Microsoft Desktop Engine (MSDE) 2000 embedded database with a network listener fully exposed to public networks. (News reports calling SQL Slammer&mdash;which, by the way, <a href="http://web.archive.org/web/20061024113636/http://www.issadvisor.com/viewtopic.php?t=118" rel="external">conventional MS-Windows virus checkers cannot detect</a>&mdash;an attack on MS-SQL Server were substantively in error.)</p>

          <p>Yankee Group senior stock analyst Laura DiDio, renowned as pretty much the <em>last person on Earth</em> to figure out that SCO Group press releases should not be <a href="http://web.archive.org/web/20061020081522/http://en.wikipedia.org/wiki/Laura_DiDio" rel="external">taken at face value</a>, <a href="http://web.archive.org/web/20050404041918/http://www.fcw.com/fcw/articles/2004/0503/feat-linux3-05-03-04.asp" rel="external">claimed</a> that Slapper compromised 20,000 GNU/Linux systems worldwide in 2002, but, even though that's a minuscule percentage of GNU/Linux deployments by 2002, it seems a bit unlikely even before considering the source: To be hit, a sysadmin would need to be both advanced enough to install/configure a mod_ssl/Apache https-capable Web site&mdash;something one associates with professional paranoia&mdash;<em>and</em> too incompetent to bother applying crucial (and semi-automated) system updates.</p>
        </li>
        <li>
          <p>
            <strong>Name:</strong> Mighty (Devnull)<br>
            <strong>Appeared:</strong> Oct. 3, 2002.<br>
            <strong>Vulnerable:</strong> A very specific and rare combination of Apache httpd w/OpenSSL 0.9.6d and 0.9.7-beta1 or earlier, via an OpenSSL buffer overflow fixed July 30, 2002.
          </p>

          <p>This was near-indistinguishable from the equally ineffective Slapper worm (above), and might as well have been the same code.</p>

        </li>
        <li>
          <p>
            <strong>Name:</strong> Adm (ADMworm, ADMw0rm)<br>
            <strong>Appeared:</strong> May 1998.<br>
            <strong>Vulnerable:</strong> BIND8 buffer overflow prior to 8.1.2 (in the reverse query function, "fake-iquery yes;", which is disabled by default).  Fix released April 8, 1998.
          </p>

          <p>The hole in question had been fixed for only a month, which might have made it a plausible threat except that "fake-iquery" is pretty much always disabled.</p>

        </li>
        <li>
          <p>
            <strong>Name:</strong> SSHD22<br>
            <strong>Appeared:</strong> Oct. 2001.<br>
            <strong>Vulnerable:</strong> OpenSSH exploit effective prior to v. 2.3.0. Old versions were patched Feb. 27, 2001; 2.3.0 released November 2000.
          </p>

          <p>People already had this hole patched for either eleven or eight months, depending on whether they were willing to jump to v. 2.3.0 or not.</p>

        </li>
        <li>
          <p>
            <strong>Name:</strong> Millen (Millenium, MWorm, Mworm)<br>
            <strong>Appeared:</strong> Nov. 18, 2002.<br>
            <strong>Vulnerable:</strong> wu_imapd daemon, via a buffer overflow fixed May 11, 2002.<br>
            <strong>Vulnerable:</strong> qpopper daemon, via a buffer overflow fixed March 2002.<br>
            <strong>Vulnerable:</strong> BIND8 through v. 8.3.3, via a buffer overflow fixed Nov. 11, 2002.<br>
            <strong>Vulnerable:</strong> rpc.mountd daemon, via a buffer overflow fixed in 1998.
          </p>

          <p>This bag-of-tricks worm attacks holes already fixed for six months, eight months, a week, and several years, respectively. Now, I have to admit that only a week's lead time on fixing a critical security hole could be a real problem if you were asleep at the wheel and your semi-automated updating mechanisms were broken or disabled&mdash;except who in his/her right mind was still running BIND8 by late 2002? It hadn't even been a standard GNU/Linux package in a year or so.</p>

        </li>
        <li>
          <p>
            <strong>Name:</strong> Sorso<br>
            <strong>Appeared:</strong> July 2, 2003.<br>
            <strong>Vulnerable:</strong> Samba prior to v.  2.0.10 / 2.2.8a, via a buffer overflow. Those fixed versions were released April 7, 2003.
          </p>

          <p>This is the only GNU/Linux worm to date targeting the <em>Samba</em> server-role package's obsolete versions, possibly because even reckless server admins tend to know that Microsoft file/print sharing isn't safe to make accessible to the global Internet&mdash;just like the aforementioned rpc.mountd and rpc.statd daemon processes (part of NFS, Network File System&mdash;or No Friggin' Security as the wags would have it). In any event, the attacked holes had already been fixed for three months.</p>

        </li>
        <li>
          <p>
            <strong>Name:</strong> Lupper (Lupii, Plupii, Mare)<br>
            <strong>Appeared:</strong> Nov. 11, 2005.<br>
            <strong>Vulnerable:</strong> PHPXMLRPC messaging library v. 1.1.1, via URL input validation bug enabling execution of arbitrary PHP. Fixed Aug. 8, 2005.<br>
            <strong>Vulnerable:</strong> AWstats Web-statistics Perl CGI script, v. 6.3, via a URL input validation bug.  Fixed June 10, 2005.<br>
            <strong>Vulnerable:</strong> Darryl C. Burgdorf's WebHints proprietary "thought for the day" Perl CGI script, v. 1.02, has <em>zero</em> URL input validation, a design failure publicised May 9, 2005. (References to v. 1.03 and 1.3 are in error.)<br>
            <strong>Vulnerable:</strong> Jimmy's "The Includer" proprietary SSI-emulation Perl CGI script v. 1.1, has
            <em>zero</em> URL input validation, a design failure publicised March 3, 2005.
          </p>

          <p>This worm&mdash;exploiting vulnerabilities already fixed or eliminated for three, five, six, and eight months, respectively&mdash;derived from the earlier Slapper worm codebase. Thus far, it exists only as an i386 GNU/Linux binary, fetched to target Web servers' /tmp directory by one of the four obsolete, vulnerable Web apps, and then run as httpd. One of those exploits (against PHPXMLRPC) would work equally well (after recompiling the worm) on any operating system. The others invoke Bourne-like shells (and thus are feasible on any Unix, but on MS-Windows only with Cygwin, etc.). The AWstats exploit also calls wget, via buggily-parsed URL input of the form "configdir=|program".</p>

          <p>The Includer and WebHints CGIs' failures to validate input are <em>total</em>: URLs "http://www.example.com/hints.pl?|program|", "http://www.example.com/includer.cgi?|program|", and "http://www.example.com/includer.cgi?template=|program|" all remotely execute "program". However, it's important to note that <em>neither is packaged</em> by GNU/Linux distributions: Either would have to be downloaded and installed manually by an admin of uncommonly bad judgement.</p>

          <p>The AWstats CGI, by contrast, is sometimes packaged but never to the best of my ability to tell installed by default, in any GNU/Linux distribution: It has historically been notorious for input validation flaws, and thus is best run in its optional <a href="http://www.debian-administration.org/articles/85" rel="external"> configuration that generates static HTML pages</a>, rather than its default CGI mode.</p>

          <p>PHPXMLRPC is usually offered via optional, supplemental PHP-add-ons packages but is never to the best of my ability to tell installed by default, in any GNU/Linux distribution. Like the related and identically vulnerable (fixed the same day, but not attacked so far by this worm) PEAR XML-RPC v. 1.3.3 messaging library, it would probably get installed as part of overfeatured, developed PHP-based Web applications such as Ampache, b2evolution, egroupware, MailWatch for MailScanner, Nucleus CMS, phpmyfaq, phpPgAds, phpgroupware, PostNuke, TikiWiki, and Xaraya; plus older versions of Civicspace and Drupal.</p>

          <p>(The two PHP-coded XML-RPC implementations should not be confused with PHP's optional xmlrpc-epi extension, in C, included with PHP since v. 4.10, or various other non-PHP implementations.)</p>

          <p>One lesson that's common to all of those exploits is that GNU/Linux Web-server admins need to be extra careful of applications that will process public data, e.g., via URL input, and doubly careful (lest they miss needed fixes) of any they choose to install outside their distributions' regular maintenance regimes.  As it happens, the worm requires rather rare (not to mention old) Web-app vulnerabilities, and extremely few systems have been reported affected. ("Affected" means that the attacker can compromise the httpd process but not the Web host as a whole, without some separate and more serious method to compromise the machine.)</p>

        </li>
        <li>
          <p>
            <strong>Name:</strong> SSH Concept Worm (AltSci Concepts)<br>
            <strong>Appeared:</strong> Mar. 6, 2008.<br>
            <strong>Vulnerable:</strong> Nothing. In 2008, Joel R. Voss <a href="https://altsci.com/concepts/page.php?s=virus&amp;p=1&amp;mod=0" rel="external">scripted</a> a brute-force attack on remote IPs' SSH ports using a dictionary password cracker and open source library libssh-0.2 to deliver a payload consisting of itself to remote systems it was able to crack.  Technically, this is thus a worm (though Voss mislabeled it a "virus"). However, it's a slow and extremely ineffective worm.
          </p>

        </li>
        <li>
          <p>
            <strong>Name:</strong> Darlloz<br>
            <strong>Appeared:</strong> Nov. 27, 2013.<br>
            <strong>Vulnerable:</strong> PHP5 CGI functions in PHP v. 5.3.11 and 5.4.1 could be tricked into remote code execution by passing them query string "?-s".  Fixed May 3, 2012.
          </p>

          <p>This worm exploited a vulnerability already fixed for six months. (Reportedly, the real target was buggy, badly designed, and almost always <em>totally unmaintained</em> home routers, set-top boxes, security cameras and industrial control systems, i.e., certain proprietary embedded-GNU/Linux devices crafted, sold, and marketed in a way that misses essentially all of the benefits of open source.)</p>

        </li>
        <li>
          <p><strong>Name:</strong> Others&mdash;you tell me. I might have missed some.</p>

          <p>If I did, long odds favour the story being same as with those above. You might search, for example, <a href="http://web.archive.org/web/20041011110030/http://www.digitaloffense.net/worms/" rel="external">JD Moore's archive</a>, <a href="http://web.archive.org/web/20070309180346/http://www.treachery.net/~jdyson/infosec/trojans/" rel="external"> Treachery Unlimited's archive</a>, the <a href="http://www.29a.net/" rel="external">29 A Group</a>, <a href="http://web.archive.org/web/20061026121416/http://www.madchat.org/" rel="external">MadChat</a>, <a href="http://vx.netlux.org/rrlf/" rel="external">RRLF</a>, Herm1t's <a href="http://vx.netlux.org/" rel="external">VX Heavens Virus Collection</a>, <a href="http://www.thehackademy.net/madchat/vxdevl/" rel="external">Hack Academy</a>, or request access to <a href="http://www.spywareinfoforum.com/" rel="external">SpywareInfo's repository</a>. Beware that some collections' "GNU/Linux" entries actually work only on certain other Unixes (usually FreeBSD or Solaris&mdash;e.g., the 2002 Scalper AKA Ehchapa worm on FreeBSD and the BoxPoison worm on Solaris), though <a href="http://www.v3.co.uk/vnunet/news/2120227/honeymoon-linux-users" rel="external">often misreported</a> as GNU/Linux code.</p>
        </li>
      </ul>

      <p>My overall point is that, especially starting around 2000 when automated and semi-automated maintenance regimes became ubiquitous in GNU/Linux distributions, even just following the path of least resistance and not being a particularly competent admin would have closed off the above holes long before they could be exploited by "viruses".  Also, Red Hat in RH 7.3 (May 2002) and other distributions about the same time started defaulting to enabling iptables port-filtering ("firewall") scripts at startup by default&mdash;again, protection even for those who haplessly switch on obsolete network daemons.</p>

      <p>Beware, too, of vacuous claims like that of Forrester Research senior analyst Laura Koetzle's <a href="http://news.techworld.com/security/1329/forrester-questions-linux-security/" rel="external">privately circulated April 2004 study</a> claiming that major GNU/Linux distributions were typically "at risk" during 2002-3 for a disturbingly long period, longer than current Microsoft operating systems were. In Koetzle's case, the sleight of hand occurs in her definition of "risk" as the number of days from availability of a source patch to the distribution's release of a package update. This ignores the crucial fact that GNU/Linux distributions' software patches for security holes are just about invariably anticipatory: They come out many months before anyone figures out how to exploit the hole, if ever&mdash;whereas Microsoft's patches very often "patch" an already exploitable security disaster. Moreover, Koetzle made the fatal error of weighting all "security" issues equally, regardless of whether they were serious or even potentially exploitable at all. Last, Koetzle made the tediously familiar error of comparing major GNU/Linux distributions each comprising <strong>both</strong> the core operating system and several thousand optional application and server packages against only Microsoft's core operating system <em>with hardly any bundled applications at all</em>, but still considered the relative "patch counts" meaningful. That's like comparing the total number of murders in the Vatican in 1998 (3) with those in Canada (555), and concluding that Canada is 185 times as dangerous a place.</p>

      <p>(News reports citing that study seem oddly reticent about which customer commissioned it. This may be of interest given that a <a href="http://www.itworld.com/031006forrester" rel="external">frequent customer</a> used Forrester Research frequently in its then-ongoing anti-GNU/Linux PR campaign, often through subsidiary firm Giga Research.)</p>

      <p>Incidentally, a brief note to anyone intending to draft yet another GNU/Linux vs. MS-Windows security comparison and aspiring to <em>get it right for a change</em>: Please jot down all Apache httpd and BIND items in <em>both columns</em>. Those open-source packages are widely used on MS-Windows servers, too.</p>

      <p>And a note to admins: Don't panic about an installed package having a "vulnerable" version number until you've checked your distribution's security-alert pages: You may well have received the fix as a "backport" to stable package code, thereby fixing the package without incrementing its version number. This practice is customary, for example, on Debian's stable branch.</p>

      <h3>III. Buggy or Obsolete User Apps Exposed to Public Data</h3>

      <p>And yes, failing to update regular, non-network-daemon <em>user</em> apps could lead to data loss and possibly personal embarrassment (albeit not <em>system</em> compromise):</p>

      <ul class="browser-default">
        <li>
          <p><strong>Name:</strong> JBells (JBellz)<br>
            <strong>Appeared:</strong> January 14, 2003<br>
            <strong>Vulnerable:</strong> The proprietary mpg123 music-playing app's buggy non-production v. pre0.59s beta, but not prior or subsequent production versions, via a buffer overflow induced by trojaned (specially malformed) MP3 files played using it, having binary code in the MP3 frame header that invokes a shell and recursively deletes the user's home directory.
          </p>

          <p>This exploit code was very brittle&mdash;needing to be customised for specific mpg123 releases on particular GNU/Linux distributions and so ever working, even theoretically, only on a couple of them&mdash;and the tiny window for overflow code didn't permit any <em>complex</em> hostile actions. However, more significant is that this affected only one buggy beta (fixed the same day)&mdash;even the prior pre0.58r beta was immune&mdash;that didn't meet quality standards for inclusion in any GNU/Linux distribution.</p>
        </li>
        <li>
          <p><strong>Name:</strong> BadBunny (BadBunny-A)<br>
            <strong>Appeared</strong> May 21, 2007<br>
            <strong>Vulnerable:</strong> Nothing, actually. This was claimed (by Sophos, Symantec, McAfee, and, I gather, Kaspersky Lab) to be a cross-platform worm written in OpenOffice Basic (formerly StarOffice Basic), the macro language of LibreOffice / OpenOffice. It's claimed that, when the macro gets run, it "drops" scripts for popular IRC clients that ask the IRC clients to send out the macro-carrying document to other recipients. This is plausible, but the passive-voice phrase "gets run" indicates the problem: Unlike MS-Office, LibreOffice (and the old OpenOffice suite) <em>runs document macros only if they're cryptographically signed by trusted sources in the developer keychain</em>, so this macro can execute, automatically or otherwise, only if the user first cripples security by manually permitting LibreOffice or OpenOffice to run untrusted/untrustworthy macros for some reason&mdash;like the old joke about an "Amish virus" that works on the honour system and must be transported and operated manually.  <em>Note carefully that this alleged threat is essentially bullshit self-promotion from the antivirus industry, and upon examination turns out to be, realistically, no threat to anyone.</em>
          </p>
        </li>
      </ul>

      <p>But it is worth noting the point, that data posted on the public Internet may in some cases be used to subvert user apps having severe, known flaws in their input validation routines&mdash;e.g., Web browsers, multimedia plugins/apps, e-mail readers, and print daemons. This isn't news to us of the GNU/Linux community, either: It's why you should keep those packages&mdash;like network daemons you choose to run, kernels' network stacks, and other security-sensitive code&mdash;up to date and eschew ones known to be particularly bug-prone or unmaintained.</p>

      <p>Anti-virus pundit and GNU/Linux critic Phil d'Espace <a href="http://web.archive.org/web/20041105040939/http://www.virusbtn.com/magazine/archives/200209/linux_malware.xml" rel="external">feels</a> that such an application exploit should be able to trivially escalate to root privilege: The particulars of JBells show that this sort of talk is cheap, that <em>examples</em> of such trivial escalation are nonexistent (and why), and that security-industry commentators have a <a href="http://linuxmafia.com/faq/Essays/security-snake-oil.html" rel="external">lamentable tendency to shade the truth</a>. (E.g., d'Espace postulates that a remotely compromised instance of Apache httpd, even though running as an unprivileged user, could be caused to overwrite "all the files on the Web site", ignoring the fact that <strong>no</strong> files within the httpd document root are or should ever be owned by that process's designated runtime user.)</p>

      <h3>IV. The Ringers. Post-Compromise Rootkits (Trojan, Worm) and Attack Tools (not malware at all)</h3>

      <p>(Note for pedants: "Malware" is often construed to mean "code that does bad things", rendering it a vague and broad category that rightfully ought to encompass Microsoft Outlook, and conflating the critical matter of security compromise with trivia about post-compromise happenings. This essay deliberately disregards the latter.)</p>

      <p>Apologies to those for whom this subject is old hat, but the following nasty packages do not qualify as GNU/Linux malware in any meaningful sense. (A few do doorknob-twisting and perfunctory attempts to enter using default username/password credentials like "root/admin" or "root/123456", a few bundle an ELF-infector for purposes of maintaining a network backdoor; a few rely on long-unpatched bugs in notoriously buggy field-added Web apps such as cPanel, WordPress, Elastisearch, etc.; the point is that these hardly qualify as "attacks" on the GNU/Linux system in any realistic sense.)</p>

      <p>Abrox, Adminer, Adore and Adore-ng (rootkits by authors "TESO" and "stealth", not to be confused with the remote-attack worm of the same name), AES (Dofloo, MrBlack), afhrm, Aidra (LightAidra, LightTaidra, NewAidra, Hydra), AjaKit, Alcohol, Alk, Ambient (ark), Andrada, Anonoying, aPa, Arang, Arkdoor, asp, Attack, Backserv, Bangsyn, Banner, Batamacker, Battlec, Beasted, BeastKit, BillGates (Billgates, Gates.B)), bindshell, Blackhole, b Blitz (Bliz), Bloop, BlowFish (BF), Bnc, BOBKit, Bodoor (BO), Bofishy, Bonk, Boonana, Boost, Bouncer, Brk, BoSSaBot, Bscan, Bshell, Caplen, Cdorked (Cdorked.A), CGI, CGIexp, Chapro.A, Chass, Chfn, Chrome, ChinaZ, Ciscer, Clifax, CleanLog, Clripch, Corn "worm", Cwd, Cyrax, Cyrus, Da2, Dancer, Danny-Boy's Abuse Kit, Dar, Darkleech, Darkux, Darkwar, DC, DCom, Dcomer, DDOSTF, demonKit, Demonul, DES.Downloader, Desida, Devil, Dexterois, Dica, Digit, Divine, Dklkt, Dmp, Dnstroyer, DobDrag, Drakat, Dreams, Drugkit, dtool, Duarawkz, Ducoci, ELF_Gmon.a (sets up a backdoor on UDP port 3049; included in SuckIT), Echo, Echosrv, Ekocms, Effusion, Eko, Ekoms (Mokes), Elfpatch, Elfwrsec, Elknot (DnsAmp), Ellipsis, Encoder (FileCoder), Escal, Espacker, Ethereal, Evil, Excedoor, Explodor, Faker, Fixer, Fkit, Flea, Flooder (Icmp), Fmtxp, Foda, Fokirtor, Fork, Fpatch (Fakepatch, ShcBased), Fpath, Freeze, Frezer, Front, Fuck'it, FunSeven, Fusys, Gabitzu, GafGyt (BASHLITE, Qbot), Ganiw, GasKit, Gata, Gbkdor, Gizc, Glock, GMM, GoARM (GOARM, Ramgo, Goram), Gold2, Guile, Gulzan, Gummo, Hacktop, Hajime, Hand of Thief (Hanthie), Haploit, heroin, Hella, Hestra, Hider, HiddenFunc, HiDrootkit, Hife, Hijack (Hijacker), HitWins, HjC, Homador, Hopbot, Hummingbad (Android-specific), ibnoKit, Igmp, IIS-Attacker, IISuxor, Ikproc, Imspd, ImperalsS-FBRK, Infect, Initen, InjWrap, Interbase, IptabLex|s (IptabLes, IptabLex)), Ircd, IRCKiller, Irix, Iroffer, itf, Kaiten (Kayten), Kaot, Kbd, KBeast (Kernel Beast), KDefend, Keitan, Kidbin, KillFile (Slexec), KIS, Kitko, KldHide, Kluh, Kmod, Knark, Knight, Kod, Koka, Kokain, Koobface, Kot, Krepper, Lacksand, Lala, Lambida, lbd, Lime, Lindoor, Linspy, Linux Rootkit (LRK), Livthe, lkm, LkmHide, LOC, Lockit (LJK2), Logftp, LuaBot, LuCe LKM, Luckroot, Ltrap, Madvise, Maniac, Manpages, Map, Masan, Matrics, Maxload, Mayhem, Melt, Metti, Mhttpd, Micmp, Midav, Mirai, Mirc, Mircforce, Mithra, Mmap, mod_rootme, MonKit, Moose, Mr, MRK, MStream, Muench, Mulexp, Mumblehard, Mweb, Nestea, NetBus, Nhttpd, Ni0, Nkiller, Nocwage, NyaDrop, OBSD, Octopus, Omega "worm", OmniRAT, OpticKit (Tux), Ovason, Overdrop, Overkill (LInux/Overkill, EnergyMech 2.0 overkill mod), Oz, Pass, PaulCyber, Phalanx, Phobi, PhsychoPhobia, PLT, PNScan, Poly, Pong, Popdoor, Portacelo, ProcHider, ProcSuid, pscan, PsychoPhobia, Qitty, Quacker, R0nin, R3dstorm, Race, Raped, Rawsocket, Rbind, Rebooke, Reboot, Reflect, Regen2k, Regile, Remaiten, Rekoobe, Remprint, Resrcs, RemoteSync, rexedcs, Rexob, RH-Sharpe, Rial, Ris, RK17, Romanian Rootkit, Rooter, Rootin, Rootkit, Rpc, Rpctime, RQPOP, RSHA, Sambex, Sendxp, Senha, Shadoor, Shaggy, ShcBased, ShellCode (Shellcode), ShellReverseTcp, Shellshock (Bash0day, Bashdoor), Shinject, ShitC "worm", ShKit, Siback, Showtee, Shutdown, SHV4, SHV5, Sicmp, Sickabs, Sin, Sink, Sinkhole (SinkSlice, Slice), Sirius, Sk, Slice, Smack, Small, Smurf, Snakso (Snakso-A), Sneakin, sniffer, Snoopy, Snug, Soutown, Sprite, SQLexp, SSHscan, SSHV (SSH bruter), SSPing, Sstftp, Stach (stacheldraht), Stealer, Stream, Streamdoor, Subsevux, SuckIT (Sckit, Skit), Suffer, Superkit, SVScan, Synapsis, Synk, Sysniff, Synscan, Targ, TBD (Telnet BackDoor), TC2, Tcpscan, Teso, Tesoelf, tfn (TFN), tfn2k, THC, TheMoon, T0rn (t0rnkit), Torte, Trank, Trinity, TRK, trinoo (Trin), Trojankit, Tsig, Tsunami, Turla, Typot, UDP, Unfstealth, Unk, Untrace, URK (Universal Rootkit) Usmel, VcKit, Vma, Volc, VPNFilter, Vulner, w55808, Waterfall, Wgcrash, Wifatch, Win, Winploit, WrapFtp, WrapLogin, WrapPasswd, WrapSu, wted, Wudel, WuScan, XChatSouls, Xicmpfl, XKeyLogger, Xmailer, XOR, Xor.DDoS, Xpl, Yangji, z2, Zab, zaRwT, and ZK.</p>

      <p>Every one of those is some sort of <em>post-attack</em> tool; all are erroneously claimed on sundry anti-virus companies' sites (and consequently in various news articles) to be "Linux viruses". Some are actually "rootkits", which are kits of software to hide the intruder's presence from the system's owner and install "backdoor" re-entry mechanisms, after the intruder's broken in through other means entirely. Some are "worms"/"trojans" of the sort that get launched locally on the invaded system, by the intruder, to probe it and remote systems for further vulnerabilities. Some are outright attack tools of the "DDoS" (distributed denial of service) variety, which overwhelm a remote target with garbage network traffic from all directions, to render it temporarily non-functional or incommunicado.</p>

      <p>The news reporters and anti-virus companies in question should be ashamed of themselves: None of the above, in itself, can break into any remote GNU/Linux system (other than, in a few cases, by doorknob-twisting of bad passwords). All must be imported manually (or equivalently by script) and installed by an intruder who has cracked your system by other means.</p>

      <p>That incompetent reporting sometimes has extremely damaging consequences: In 2002, British authorities <a href="https://www.nytimes.com/2002/09/20/world/computer-virus-author-arrested.html" rel="external">arrested</a> the alleged author of the T0rn rootkit, based on their mistaken notion that it's a "Linux virus". (My efforts to get the Reuters / NY Times story corrected were ignored, except by cited anti-virus consultant Graham Cluley, who told me he'd been misquoted.)</p>

      <p>I should mention in passing that feeble albeit genuine malware like the RST and OSF ELF-infectors are often downloaded and manually installed, locally, by attackers <em>after they've entered and cracked root via other means entirely</em>, often as part of their "rootkits". Some of these help keep alive UDP-based backdoors to preserve their ongoing access. The point, again, is that they're an <em>after-effect</em> of break-in, not a method of attack in themselves. It's like a burglar disabling your back-porch door lock from inside your kitchen; it's damage, but not the guy's means of entry.</p>

      <h3>V. In Summary</h3>

      <p>There are <a href="http://linuxmafia.com/faq/Security/breakin-without-remote-vulnerability.html" rel="external">real threats</a> to GNU/Linux security. If you spend time looking for "Linux viruses"&mdash;which, by and large, can come at your system only if you <em>get behind them and push</em>&mdash;you might miss the real threats and not do something useful like <a href="http://web.archive.org/web/20080427075329/http://security.itworld.com/4352/LWD000829hacking/pfindex.html" rel="external"> studying your security profile</a> and <a href="http://linuxgazette.net/issue98/moen.html" rel="external">other measures</a>.</p>

      <p>And yes, some "virus" author could in principle, some day, in the very worst-case scenario&mdash;if he/she were able to find a remotely exploitable Linux kernel network-code flaw unknown to everyone else&mdash;unleash a devastating and rapid, automated, surprise attack that clobbers (compromises) within one hour a large percentage of, say, worldwide Internet-connected x86 GNU/Linux servers' TCP/IP stacks, and thus gains root control.</p>

      <p>This would force all afflicted systems to be offline for a day to await the necessary patch and be rebuilt. That would be very annoying&mdash;but would hardly be unrecoverable. Moreover, I'll give very long odds against this or less-central failures happening, too&mdash;and lower ones for the same threat against practically every other operating system.</p>

      <p>Why? Some of the reasons were articulated nicely in (separate) analyses by <a href="http://www.theregister.co.uk/security/security_report_windows_vs_linux/#winvslinuxdesign" rel="external">Nick Petreley</a>, <a href="http://www.faqs.org/docs/artu/ch03s02.html" rel="external">Eric Raymond</a>, and <a href="http://linuxmafia.com/~karsten/Rants/spyware.html" rel="external">Karsten M. Self</a>:</p>

      <ul class="browser-default">
        <li>System was designed for multiuser and networked operation from the ground up.</li>
        <li>System was designed to distrust and not rely (in the general case) on remote procedure calls (RPCs), especially not between hosts.</li>
        <li>System is profoundly modular, with the simplest, most generic possible interactions (often via pipes or textual interchange&mdash;even if then layered over sockets, etc.) between components (which can thus be individually changed, patched, upgraded, removed, or disabled as desired&mdash;without, in general, large interdependency consequences or cascade failures). Within that modular framework, functional substitutes exist and can be swapped in for almost all common security-relevant codebases.  (E.g., if OpenSSH is having security problems, I can easily sidestep to Dropbear, LSH, or any of <a href="http://linuxmafia.com/ssh/unix.html" rel="external">several other</a> SSH daemons. Ditto <a href="http://linuxmafia.com/~rick/faq/warez.html#httpd" rel="external">Web servers</a>, <a href="http://linuxmafia.com/faq/Network_Other/ftp-daemons.html" rel="external">ftp daemons</a>, <a href="http://linuxmafia.com/faq/Mail/mtas.html" rel="external">mail servers</a>, etc. If need be, I can even change kernels (<a href="http://www.debian.org/ports/kfreebsd-gnu/" rel="external">1</a>, <a href="https://www.osdyson.org/projects/dyson/wiki" rel="external">2</a>).</li>
        <li>System doesn't give software excessive privilege or easy paths to escalation. Components run with high privilege are kept as small and carefully checked as possible. Interacting components seldom even run as the <em>same</em> effective user ID, and thus are in a poor position to subvert one another's resources.</li>
        <li>As a result of the above, system state is highly transparent, lending itself to effective scrutiny and management via simple, well-understood tools (including ps, netstat, lsof, lslk, fuser, etc.).</li>
      </ul>

      <p>For details, please see Petreley, Raymond, and Self's more-comprehensive write-ups.</p>

      <hr>

      <p>The most recent version of these essays can be found at <a href="http://linuxmafia.com/~rick/faq/" rel="external">http://linuxmafia.com/~rick/faq/</a></p>

      <br>

      <aside>
        <a class="waves-effect waves-light btn-large light-green darken-4" href="<?php $this->base_url('linux/faq'); ?>">
          <?php print _("GNU/Linux FAQ"); ?>
          <i class="material-icons <?php print $this->rtltr("left", "right"); ?>">expand_less</i>
        </a>
      </aside>

      <br>
    </div>
  </article>
</main>

<?php $this->load_footer(); ?>
