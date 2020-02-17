---
id: 3
title: Exploring the ls directive
excerpt: It was nothing less than magic to use the terminal for the first time, type `ls` and see the list of files in the terminal output. In this short article I show you the variety of options you can use with ls directive
---

Remember the first time you used the terminal on Linux or Mac? I can bet `ls` was the first command you used.

It was nothing less than magic to use the terminal for the first time, type `ls` and see the list of files in the terminal output.

![](https://res.cloudinary.com/doohrbhlh/image/upload/v1581861304/exploring-the-ls-command-1.gif)

## Other ways to use it


`ls` gets us started with one tiny step. But, it has many other options we overlook. Below are the ways I use options with `ls` in my regular workflow.

`ls -l` displays extra information for files and directories.

![](https://res.cloudinary.com/doohrbhlh/image/upload/v1581861441/exploring-the-ls-command-2_upy9vq.gif)

`ls -la` displays hidden files along with the normal files

![](https://res.cloudinary.com/doohrbhlh/image/upload/v1581861513/exploring-the-ls-command-3_zcb19n.gif)

To view file size in human readable format, use `ls -lh`

![](https://res.cloudinary.com/doohrbhlh/image/upload/v1581861570/exploring-the-ls-command-4_dbe59h.gif)

If you want to sort files in order of the file size, use `ls -lh -S`

![](https://res.cloudinary.com/doohrbhlh/image/upload/v1581861609/exploring-the-ls-commands-5_rqnugz.gif)

## Applications:

We have fairly understood some of the options of the `ls` directive. But what are its applications? Where do I need to use this to help me get better at what I do?

Log files always take up too much space on my server. I need to understand which log files are eating up space. I use `ls -lh -S` to take control of my log files in the following way:

![](https://res.cloudinary.com/doohrbhlh/image/upload/v1581861646/exploring-the-ls-command-6_ajtvgh.gif)