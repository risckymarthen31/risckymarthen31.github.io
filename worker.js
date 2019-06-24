onmessage = function(e) {
  console.log('Worker: Message received from main script');
  let result = 0;
  if (e.data[0] == 1) {
  	result = 750000 * e.data[1];
  }
  else if (e.data[0] == 2) {
  	result = 500000 * e.data[1];
  }
  else if (e.data[0] == 3) {
  	result = 1200000 * e.data[1];
  }
  else{
  	result = 0 * e.data[1];
  }
  if (isNaN(result)) {
    postMessage('Please write two numbers');
  } else {
    let workerResult = 'Rp. ' + result;
    console.log('Worker: Posting message back to main script');
    postMessage(workerResult);
  }
}
