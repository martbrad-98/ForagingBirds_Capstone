const btn = document.getElementById('btn');

let index = 0;

const colors = ['red', '#4CAF50'];

btn.addEventListener('click', function onClick() {
  const unitialText = 'Start Test';

if (btn.textContent =="Start Test"){
    btn.style.backgroundColor = colors[index];
    btn.style.color = 'white';
    btn.textContent = 'Test Running';
}
else{
    btn.style.backgroundColor = colors[index];
    btn.textContent = 'Start Test';
}

index = index >= colors.length - 1 ? 0 : index + 1;
});

