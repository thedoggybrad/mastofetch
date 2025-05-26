### This project will soon become the sucessor of Mastoget, however an incident regarding Github and Vercel had delayed the process which can be tracked on https://www.githubstatus.com/incidents/d0nm3xcdc5jw. Once this project is online "The Mastoget Organization" will begin its shutdown and will redirect all of its endpoints to Mastofetch.

![android-chrome-192x192_on3vfq](https://github.com/user-attachments/assets/8d968cbe-7fe7-4210-80f1-41a12beff92f)
# Mastofetch
Mastofetch is your anonymized feed retriever for the Mastodon network. This project feeds the public posts posted across the entire Mastodon network to your web browser.
<br>
Mastoget can retrieve posts from 235 Mastodon Instances. Though, 5 posts will initially appear then the rest will load as you scroll (lazyloading) to prevent overloading the server.
<br><br>
[Terms of Service](#terms-of-service-for-mastofetch)  <br>
[Privacy Policy](#privacy-policy-for-mastofetch)  <br>
[Vision of Mastofetch](#vision-of-mastofetch)  <br>
[Mission of Mastofetch](#mission-of-mastofetch) <br>
[Short History](#short-history-of-mastofetch) 

<br>

## Terms of Service for Mastofetch
Effective Date: May 26, 2025
<br><br>
Welcome to Mastofetch (“we”, “us”, or “our”). These Terms of Service (“Terms”) govern your use of the Mastofetch website and services (the “Service”). By accessing or using the Service, you agree to be bound by these Terms. If you do not agree to these Terms, please do not use the Service.
<br><br>
1. Description of Service<br>
Mastofetch aggregates and displays public posts (also known as "toots") from various Mastodon instances using their publicly available APIs. The content you see is fetched directly from those instances and presented in real-time or near real-time.
<br><br>
2. No User Accounts<br>
We do not require user registration, login, or account creation. You may browse the aggregated content anonymously.
<br><br>

3. Public Content<br>
All posts shown via Mastofetch are public content made available by their original authors on Mastodon instances. We do not host, modify, or republish this content beyond what is necessary for display purposes.
<br><br>

4. Use of the Service<br>
You agree to use Mastofetch for lawful purposes only and in accordance with these Terms. You may not:<br>
-Attempt to disrupt or overload our servers.<br>
-Use the Service to scrape or store large volumes of content.<br>
-Misrepresent the origin of the content.<br>
-Use the Service in a way that violates the rights of others.
<br><br>

5. Intellectual Property<br>
All trademarks, logos, and brand names used in Mastofetch are the property of their respective owners. Mastofetch does not claim ownership over any content retrieved from third-party Mastodon instances.
<br><br>

6. Disclaimer of Warranties<br>
The Service is provided “as is” and “as available” without warranties of any kind. We make no guarantees about the accuracy, reliability, or completeness of the content displayed.
<br><br>

7. Limitation of Liability<br>
To the fullest extent permitted by law, Mastofetch and its operators shall not be liable for any indirect, incidental, special, consequential, or punitive damages resulting from your use of or inability to use the Service.
<br><br>

8. Changes to the Terms<br>
We may update these Terms at any time. Changes will be effective immediately upon posting. Continued use of the Service constitutes your acceptance of any revised Terms.
<br><br>

9. Governing Law<br>
These Terms are governed by and construed in accordance with the laws of [Your Country or State], without regard to its conflict of laws principles.
<br><br>

10. Contact<br>
For questions, feedback, or legal inquiries, please contact us at:<br>
https://github.com/thedoggybrad/mastofetch/issues



## Privacy Policy for Mastofetch
Effective Date: May 26, 2025
<br><br>
Thank you for using Mastofetch. Your privacy is important to us. This Privacy Policy explains what data we collect, how we use it, and your rights regarding your information.
<br><br>
1. Information We Collect<br>
We do not collect any personal data from you.<br>
When you use Mastofetch:<br>
-We do not require registration.<br>
-We do not track your IP address or location.<br>
-We do not set cookies.<br>
-We do not log your usage activity.
<br><br>
2. Public Data from Mastodon<br>
Mastofetch fetches publicly available posts (toots) from various Mastodon instances via their public APIs. This data may include:<br>
-Public display names and usernames<br>
-Profile images<br>
-Post content and media (images/videos)<br>
-Timestamps of posts<br>
This data is publicly accessible on the respective Mastodon instances and is not stored on our servers. We display it in real-time when you access the site.
<br><br>
3. No User Tracking<br>
We do not use:<br>
-Analytics (e.g., Google Analytics)<br>
-Tracking pixels<br>
-Fingerprinting techniques<br>
Your visit remains anonymous.
<br><br>

4. Data Storage<br>
We do not store any data about our visitors or the fetched posts. All data is retrieved live from public sources and discarded after it is displayed.
<br><br>

5. Third-Party Services<br>
Mastofetch accesses public APIs from Mastodon instances. These instances are independently operated, and each has its own privacy policy. You can refer to each instance’s website for more details about how they handle data.
<br><br>

6. Contact<br>
If you have any questions or concerns about this privacy policy, please contact us at:<br>
https://github.com/thedoggybrad/mastofetch/issues
<br><br>

7. Changes to This Policy<br>
We may update this Privacy Policy from time to time. Changes will be posted on this page with an updated effective date.
<br><br>
By using Mastofetch, you agree to this Privacy Policy.

## 🌐 Vision of Mastofetch
To make the decentralized social web more accessible, discoverable, and transparent by providing a seamless, ethical window into the diverse voices of the Fediverse.

## 🚀 Mission of Mastofetch
Mastofetch aims to empower developers, researchers, and curious users by delivering an open-source, privacy-conscious tool that fetches and organizes public Mastodon content across instances—promoting interoperability, openness, and user empowerment in the evolving world of federated networks.

## Short History of Mastofetch
•During the early years of Mastoget, it was slow, because it loads every post it fetches before showing to the user. And it happens that 12 seperate renderers are created to avoid exceeding the limits of each endpoints.
<br><br>
•On May 25, 2025, "TheDoggyBrad Software Labs" fixed the major problem with Mastoget, which is slow loading as it loads everything before it shows the page to the user with lazyload.<br>
It was seen that the 12 seperate load balancing renderers of Mastoget are no longer needed.
<br><br>
•On May 26, 2025, it was decided that instead of messing up with the super weird configuration of Mastoget, it was retired and replaced by Mastofetch.
