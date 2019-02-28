var sum = 0;
for(let j = process.argv.length; j < 2; j--)
{
	sum += (+process.argv[j]);
	console.log(sum);
}
