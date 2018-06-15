# modwrk
Deep Dive pwp

### Milestone 1 Feedback
Nice work adding more specificity and detail to your Purpose, Audience, Goal and Persona. I feel that your direction here is now much more clear, and I hope this was a useful exercise and will provide you with a bit more direction going forward - particularly in Milestone 2a. 

The details you added to the Goal especially stood out to me. The following paragraph in particular:

"..._freelance interaction design and product strategy work. Ideally projects would be innovative, forward thinking, and community focused solutions for real issues as opposed to money grabs_."

This is great stuff here - I'm really looking forward to seeing how you plan to address these specifics with your content strategy and UI design concepts in Milestone 2a. 

Your Milestone 1 passes at [Tier III](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). There are a couple of minor code issues I saw, please see Edits &amp; Suggestions below. You are now clear to begin work on Milestone 2&alpha;.

#### Edits &amp; Suggestions
- Add `/vendor` to your .gitignore
- Remove PUBLIC from your !DOCTYPE on line 1

### Milestone 2a Feedback
Excellent work on the wireframes and accompanying content strategy. Your design direction is detailed and clearly defined, it's great that you've taken a forward-facing view here. I recall that you mentioned something about a horizontal scrolling interaction last week (?), but I don't see that reflected here.  

jQuery can be a helpful tool on this project - it provides a simple syntax that can help you create  custom interactive touches easily. I'm recommending a few 3rd party jQuery libraries below for some of your interactive features - and the libraries/tools I suggest are ones that I've had good experiences with. Bookmark the jQuery documentation for reference: http://jquery.com/, and we'll also be using jQuery to run the client-side validation on the contact form as well.

I'm noting that you have two different menus for mobile and desktop - you'll have to build these separately and enable/disable on the appropriate screen breakpoints. It looks like the desktop menu is sticky on top after a certain scroll point - the [Waypoints](http://imakewebthings.com/waypoints/shortcuts/sticky-elements/) library can be used to help build this.

The mobile menu appears to be housed in an expanding region along the bottom of the mobile view. I'd be careful with the mobile menu as you have it outlined here - this could be a tricky one to get right from both a development and UX perspective. Rather than build it as a "stretchy modal", this element is probably better approached as an "off canvas flyout" or "nav drawer" menu.

Have a look at the [Panels](https://panels.scotch.io/) library for an example. I recommend somthing like as the approach for the mobile menu, disabled on full-width screens of course. (Disclosure: This is one tool I actually haven't used yet, but scotch.io is a trusted source.) Flyouts/nav drawers are also an established UX pattern on both mobile and web that end-users are accustomed to in regards to navigation. The Material "floating action button" is  not designed to be used in conjuntion with navigation, but for a singular "primary action" - and this is outlined in the Material design spec. Subtle difference that I mention only because you're more interested in UX on the whole.

See:
- https://material.io/guidelines/patterns/navigation-drawer.html
- https://material.io/guidelines/components/buttons-floating-action-button.html

The Bootstrap built-in modals are generally sufficient for basic usage, but I feel that you may be interested in something beyond what Bootstrap offers. You might want to consider another 3rd party tool like [Izimodal](http://izimodal.marcelodolce.com) that feature additional customization options.

If you would like to integrate some interactive gallery functionality to your Portfolio thumbnails, have a look at [FancyBox3](http://fancyapps.com/fancybox/3/). This tool is high on my list for quality, ease of use, and customization options.

For simple parallax effects, you may want to try [Rellax.js](https://dixonandmoe.com/rellax/). It's worked well for me and other students in the past and it's easy to integrate. You may want to consider only enabling parallax effects on larger screens/laptop widths as it can often be poorly handled by mobile browsers due to the differences with how the onscroll event is handled on some mobile devices.

Last but not least, [FontAwesome](https://fontawesome.com/) is a good quality free library for including iconography.

You make want to read ahead regarding the contact form integration - and that documentation is here: https://bootcamp-coders.cnm.edu/class-materials/jquery-validated-captcha-form/

Your Milestone 2a passes at [Tier IV](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). You are now clear to begin development on your PWP. Looking forward to seeing your project come together.

**We'll be building PWP in a file named index.php inside of /public_html**. Please note that no publicly-accessible site files should live outside of the /public_html directory. It would be best to move your existing `/images` directory inside `/documentation`, isolating these from your active project. Remember use an organized and standards-compliant directory structure to house all images, JavaScript, CSS, etc. We are done with the /documentation directory for now!

#### Edits &amp; Suggestions
- Add `/vendor` to your .gitignore
- Remove PUBLIC from your !DOCTYPE on line 1 - this is an error.
- Just a petty observation - but the paths to your images and CSS file could be simplified and also written relative to the current directory - in other words... omitting `../documentation`.

### Milestone 2b Feedback
Really nice work - looking forward to seeing this come together. Milestone 2b passes at [Tier IV](https://bootcamp-coders.cnm.edu/projects/personal/rubric/)

### PWP Final Feedback
You had some ambitious plans for this project, and unfortunately our time constraints were probably the biggest roadblock to their implementation. You are beyond ready to dive into much more challenging front-end material than what we explored in class, and I'm looking forward to seeing what you create in the future! What you've created here is simple and attractive. I know that you wanted to push it much further, but alas - time constraints!

*Code Base*: Your code quality looks great. Going through your repo - I see you've used some custom jQuery to toggle/fade in the page views in lieu of calling the `.animsition()` function from the plugin. I'm curious as to what challenges you were facing here... and if the plugin wasn't working for you out-of-the-box. Nice work wrestling with jQuery - this doesn't look like it was very fun or straightforward haha.

Your CSS looks great - nice. Sass should surely be in your future.

It looks like there may be an issue with your TypeKit loading... I'm getting a 404 on that file. See the console. The Resume isn't loading - it doesn't appear uploaded to the server?

One suggestion I have for the future is to name your files in a way that the php filename does not resolve in the URL... name each file as `index.php` in their subdirectory, and your URLs will be cleaner. Nice work with the php templating process.

Curious... I don't see your `.htaccess` file on GitHub, but your SSL should work fine at your subdomain (I tested it as https, and it loaded fine). The secure connection should be forced in the .htaccess file - but it might need a minor adjustment for the subdomain.

*Git Commits*: Nice work with VCS - your Git/GitHub history is good.

*Mobile-First Responsiveness*: I've tested your page using devtools, Chrome & Firefox on Linux and Android. Your layout responds well across these platforms. For some reason the gallery is working better on mobile than on Desktop for me however (Tested Chrome and Firefox on Ubuntu). There's some issues with the images scaling incorrectly  in the desktop browsers... but they look fine on mobile. First time I've seen this - but hopefully not a tough fix. I might opt to get rid of the horizontal scroll on the gallery section too.

*Design, Content, &amp; Overall Presentation*: Again, nice work on an attractive concept. There is certainly room to polish this and take it to the next level - but you know that! You're doing great work - keep challenging yourself :D

*Contact Form*: Appears to work fine on my end. Did you get my test message?

Nice work - your PWP passes at [Tier IV](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). Your cumulative PWP score including all Milestones is 38/40 points (95%).

- Milestone 1 - 20%: Tier III 30(0.2) = 6
- Milestone 2a - 20%: Tier IV 40(0.2) = 8
- Milestone 2b - 10%: Tier IV 40(0.1) = 4
- Milestone 3 - 50%: Tier IV 40(0.5) = 20

#### Suggestions
- We didn't discuss favicons, but you might want to consider adding one. Have a look at this tool which helps render multiple versions for cross-platform  support: https://realfavicongenerator.net/
