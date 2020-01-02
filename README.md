# Star Wars Blog

## Purpose
- This project is designed to reveal different features of WordPress by replicating the [Star Wars News WordPress site](https://starwars.com/news). You'll be introduced to WordPress Posts, Featured Images, tags, categories, and Advanced Custom Fields.

## Development Process
- The project is broken into different branches listed in numerical order. Each branch has a list of instructions within the README.md file. 

## Project Requirements
- php friendly code editor such as Visual Studio Code or an IDE like PhpStorm

## Project Setup
- Install the following On Your Computer
  - Vagrant
  - Virtual Box
  - Bootstrap 4
  - Sass
---  
## Getting Started
---
### Project Branches

#### 1-foundation
This is the foundation of your project. It includes a bare-bones install of HTML5Blank and WP Bootstrap Navwalker.
1. Clone the `1-foundation` branch as your project folder.
2. Add the `site.yml` provided to you in Slack in your project folder. Change the email address to match yours.
3. Add the IP address and hostname to your /etc/hosts file.
4. In your project folder, cd through the following file path: `/wordpress/wp-content/themes/wordpress-theme-starter-master`. When you're in the `wordpress-theme-starter-master` directory, you'll also see a `sass` directory. Run `sass --watch ./sass/style.scss:./style.css` in your terminal or gitbash from within the `wordpress-theme-starter-master` directory. Or in otherwords, one level up from the `sass` directory.
5. Visit the site in your browser, `star.wars`. You'll see the default theme, Twenty Twenty. In your browser visit `star.wars/wp-admin`. Login using the password declared in the `site.yml` file. Next, in the wp-admin dashboard, go to appearances > themes > wordpress-theme-starter-master (It's the one featuring Unsinkable Sam [cat]). Activate theme.
6. Go back to your site, make sure HTML5Blank logo is showing.
7. Double check that your `.gitignore` file is the most recent version we've been using. It should be about 40 lines long and include the `site.yml` file.
8. `git add .`, `git commit -m "Initial commit"`, `git push`. Follow the instructions provided by Git after `git push`-ing. 
9. This foundation will be your master and development branch. From your development branch, `git checkout -b 2-acf-install`.