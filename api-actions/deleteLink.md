<H1>Delete Link<H1>

This action, will allow you to delete the link details you have saved using <a href="https://github.com/77yards/permly-api/tree/master/api-actions/saveLink.md">saveLink</a>.

By using php-wrapper class, you can send request in this way:

Create a object of php wrapper class of perm.ly API

$server = new permly_api(); 

If you know the unique id of your link, you can delete it in this way. 

$result = $server->deleteLink(10101);

To get the link id, you can call any of below action

<a href="https://github.com/77yards/permly-api/tree/master/api-actions/getLinkByTarget.md">getLinkByTarget</a>    

<a href="https://github.com/77yards/permly-api/tree/master/api-actions/getMyLinks.md">getMyLinks</a>

If you don't know the unique id, then you can delete it in this way.

$result = $server->deleteLinkByKey('xyz');
