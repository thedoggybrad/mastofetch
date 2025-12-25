![android-chrome-192x192_on3vfq](https://github.com/user-attachments/assets/8d968cbe-7fe7-4210-80f1-41a12beff92f)
# Mastofetch
Mastofetch is your anonymized feed retriever for the Mastodon network. This project feeds the public posts posted across the entire Mastodon network to your web browser.
<br>
Mastofetch can retrieve posts from 235 Mastodon Instances. Though, 5 posts will initially appear then the rest will load as you scroll (lazyloading) to prevent overloading the server.

![mastofetch-screenshot](https://res.cloudinary.com/dceum4nes/image/upload/f_auto,q_auto/v1/mastofetch/bdwa8xpebulizhkqnkuq)

## Try it! 
Visit 
[https://mastofetch.vercel.app](https://mastofetch.vercel.app) to try Mastofetch today!
<br>

[Terms of Service](#terms-of-service-for-mastofetch)  <br>
[Privacy Policy](#privacy-policy-for-mastofetch)  <br>
[Vision](#vision-of-mastofetch)  <br>
[Mission](#mission-of-mastofetch) <br>
[Short History](#short-history-of-mastofetch) <br>
[Self-Hosting](#self-hosting-mastofetch)
<br>

## Terms of Service for Mastofetch
Effective Date: December 25, 2025
<br><br>

Welcome to Mastofetch ("we," "us," or "our"). These Terms of Service ("Terms") govern your use of the Mastofetch website and services (the "Service"). By accessing or using the Service, you agree to be bound by these Terms. If you do not agree to these Terms, please refrain from using the Service.
<br><br>

1. Description of Service<br>
Mastofetch aggregates and displays public posts (also known as "toots") from various Mastodon instances using their publicly available APIs. The content you see is fetched directly from those instances and presented in real-time or near real-time.<br>
This service is not owned or operated by Mastodon gGmbH, nor is it affiliated with Mastodon gGmbH in any official capacity. Instead, it is operated by TheDoggyBrad Software Labs.
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
-Use the Service in a way that violates the rights of others.<br>
<br><br>

5. Intellectual Property<br>
All trademarks, logos, and brand names used in Mastofetch are the property of their respective owners. Mastofetch does not claim ownership over any content retrieved from third-party Mastodon instances. Additionally, Mastofetch does not claim ownership of the logos, assets, or trademarks of Mastodon or any of its affiliated services. All such trademarks and assets are the sole property of Mastodon or its respective owners.
<br><br>

6. Disclaimer of Warranties<br>
The Service is provided "as is" and "as available" without warranties of any kind. We make no guarantees about the accuracy, reliability, or completeness of the content displayed.
<br><br>

7. Limitation of Liability<br>
To the fullest extent permitted by law, Mastofetch and its operators shall not be liable for any indirect, incidental, special, consequential, or punitive damages resulting from your use of or inability to use the Service.
<br><br>

8. Changes to the Terms<br>
We may update these Terms at any time. Changes will be effective immediately upon posting. Continued use of the Service constitutes your acceptance of any revised Terms.
<br><br>

9. Governing Law<br>
These Terms are governed by and construed in accordance with the laws of your country, without regard to its conflict of laws principles.
<br><br>

10. Contact<br>
For questions, feedback, or legal inquiries, please contact us at:<br>
https://github.com/thedoggybrad/mastofetch/issues


## Privacy Policy for Mastofetch
Effective Date: December 25, 2025
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
Your visit remains anonymous and we will never collect data that can identify you.
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

## Vision of Mastofetch
To enhance accessibility, discoverability, and transparency in the decentralized social web, offering an ethical, seamless gateway to the diverse voices of the Fediverse.

## Mission of Mastofetch
Mastofetch strives to empower developers, researchers, and curious users by providing an open-source, privacy-focused tool that retrieves and organizes public Mastodon content from across instances. Our goal is to foster interoperability, openness, and user empowerment in the evolving landscape of federated networks.

## Short History of Mastofetch
•During the early years of Mastoget, it was terribly slow, because it loads every post it fetches before showing to the user. And it happens that 12 seperate renderers are created to avoid exceeding the limits of each endpoints. It was partially solved by just showing posts from a single instance but it was not enough.
<br><br>
•On May 25, 2025, "TheDoggyBrad Software Labs" fixed the major problem with Mastoget, which is slow loading as it loads everything before it shows the page to the user with lazyload. Posts from every instance can now be seen without too much delay on the initial page load.<br>
Then, it was seen that the 12 seperate load balancing renderers of Mastoget are no longer needed after the changes.
<br><br>
•On May 26, 2025, "The Mastoget Organization" shutted down and passed its operations to TheDoggyBrad Software Labs as "Mastofetch". Therefore, all the 12 seperate load balancing renderers was consolidated into this one site in a single server.
<br><br>
•Up to this day, the "Mastoget" source code is still the foundation of "Mastofetch" and have been enhanced over time.

## Self-hosting Mastofetch
To self-host Mastofetch on your own, you have 2 main options:
<br>
A. Upload the "index.php" file located at the /api folder of this repository to your PHP-supported web hosting provider or PHP-supported self-hosting machine and it is ready to use with no setup required. Just ensure to use PHP 8 and above to avoid any issues as this project is currently designed to run under PHP 8 (There are free options but they are limited).
<br>
B. Fork this repository and then create a project in Vercel and link your fork repository to the project or directly use Vercel to clone this repository during the creation of your project there. You will need to follow some steps in order to do this but this will not require any technical knowledge to do so (This is absolutely free, unless you opted to a paid plan in Vercel).
