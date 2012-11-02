<H1>Delete Link By Key</H1>

This action will allow you to delete the link details you have saved using <a href="https://github.com/77yards/permly-api/tree/master/api-actions/saveLink.md">saveLink</a>.

By using php-wrapper class, you can send request in this way:

Create an object of php wrapper class of perm.ly API

$server = new permly_api(); 

If you know the short key of your link, you can delete it in this way. 

$result = $server->deleteLinkByKey('xyz');

<H2>Example</H2>

<I>Sending Request</I>
<pre>
$result = $server->deleteLinkByKey('abc-com-official-site-of');
</pre>

<I>Output</I>
<pre>
{"data":{"deleted":"ok"}}
</pre>