# Star Wars Blog

## Purpose
This project is designed to introduce different features of WordPress by replicating the [Star Wars News WordPress site](https://starwars.com/news). You'll be introduced to WordPress Posts, Featured Images, tags, categories, and Advanced Custom Fields.

## Development Process
The project is broken into different branches listed in numerical order. Each branch has a list of instructions within the README.md file. 

## Project Requirements
- php friendly code editor such as Visual Studio Code or an IDE like PhpStorm

## Project Setup
- Install the following On Your Computer
  - Vagrant
  - Virtual Box
  - Bootstrap 4
  - Sass

## Getting Started
The master branch has everything you need to get started, including the *Wordpress Theme Starter* theme and *.gitignore files*. **I will send you the site.yml and ACF license seperately as part of Project Branch 2.** You **do not** have to setup VCCW.

1. On GitHub, fork (upper right corner of page) your own copy of this repo.
2. Select which of **your** GitHub repos or orgs to fork to.
3. Once you've added the fork to your GitHub repo or org, select the green `Clone or Download` button, and copy the https link.
4. Now you want to clone your fork locally. To do so head over to your local project folder. The git command you run should look something like `git clone https://github.com/your-repo-or-org-name/star-wars-blog.git`.
5. In your project folder run `git remote -v` to see if the `fetch` and `push` remotes are the same. They should both share the same "origin" source, which is your repo or org.
6. Run `git branch -a` to show all branches that were forked, as well as remote branches. Most likely you'll see the master branch as green, and everything else in red is a remote branch. This is a good thing :)
7. Next we want to tell Git to track the remote branches locally. Let's start by tracking the "development" branch. Run `git checkout -b development origin/development`.
8. Now run `git branch -a` to see if the "development" branch was added locally.
9. Follow steps 6 & 7 for the remaining branches. Your git command should look like this, `git checkout -b name-of-branch origin/name-of-branch`.
10. Let's test Git and Github, and make sure GitHub is tracking your chages. On your local "development" branch make a change to the README.md. Then git add, git commit, git push. You should see the change in your README.md on GitHub, and the contribution (green square) in your profile. 

## Project Branches
(temporarily empty)