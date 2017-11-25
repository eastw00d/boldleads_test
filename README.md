# Lead capture test

# How it works:

1) home/ index page  which you see first  is represented here as an advertisement. Lead will click button "find out today" in order to get to the Landing page. 
2) Landing page is meant to collect lead info the only restriction is email it must be entered, otherwise it is not a good lead. I would implement captha on this page  so DB won't be filled with some garbage but  I didn't implemented it, no need to spend more time. After lead captured   I take him to a thanks page  jsut to notify lead that he will be contacted if needed.
3) Dashboard page is here to show a table with all the leads captured (if list gets bigger I have  arrow up to list back to the top, hidden by default) By clicking on info icon User can  see a little popup with more detailed information about lead, by clicking anywhere this popup is closing itself. I could implement a pagination if I had more time to mess with it
4) This Website is  fully  responsive - I used bootstrap and some libraries to make it pretty :) 
5) In addition to everything I added login/registration functionality, so in order to see a dashboard you will have to register a new user and login into the website

#How to setup:
You will need MAMP app for mac or anything like that or server whichecver you prefer
I use php 7.0 and MySQL 5.6.33
And CodeIgniter framework that is provided with all the files on here

1) Make sure your Apache or Nginx is pointed to the right directory in my case it is NGINX:

		root                 "/Applications/MAMP/htdocs/sc/public";
    
must be pointed to public directory that I keep all the public accessed stuf in codeIgniter(JS, CSS,HTML,Images)

2) application/views/templates/layout.php - this is a wrapper for templates ie header and footer  that includes all the css and js libraries  it is also  has js variable  base_url, it must be setup just like so, I have nginx running on 7888 port if you use Apache you can remove poort posrtion

<script type="text/javascript">
  var base_url = 'http://localhost:7888/';
</script>
3) you will need run queries from attached SQL file to create DB

#This is all you need to set it up
