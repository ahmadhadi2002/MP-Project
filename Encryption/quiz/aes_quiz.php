<link rel="stylesheet" type="text/css" href="../shared_css/style(q).css">

<div class="quiz_all">
  <div class="quiz-container" style="height: 350px;">
    <div id="quiz"></div>
  </div>
  <button class="button" id="previous">Previous Question</button>
  <button class="button" id="next">Next Question</button>
  <button class="button" id="submit">Submit Quiz</button>
  <div id="results"></div>
</div>

<script>

  function buildQuiz() {
    const output = [];

    qn.forEach(
      (currentQuestion, questionNumber) => {
        const answers = [];
        for (letter in currentQuestion.answers) {
          answers.push(
            `<label>
              <input type="radio" name="question${questionNumber}" value="${letter}">
              ${letter} :
              ${currentQuestion.answers[letter]}
            </label>`
          );
        }

        output.push(
          `<div class="slide">
            <div class="question"> ${currentQuestion.question} </div>
            <div class="answers"> ${answers.join("")} </div>
          </div>`
        );
      }
    );
    quiz.innerHTML = output.join('');
  }

  function showResults() {
    const answerContainers = quiz.querySelectorAll('.answers');
    let numCorrect = 0;

    qn.forEach((currentQuestion, questionNumber) => {
      const answerContainer = answerContainers[questionNumber];
      const selector = `input[name=question${questionNumber}]:checked`;
      const userAnswer = (answerContainer.querySelector(selector) || {}).value;

      if (userAnswer === currentQuestion.correctAnswer) {
        numCorrect++;
        answerContainers[questionNumber].style.color = 'lightgreen';
      } else {
        answerContainers[questionNumber].style.color = 'red';
      }
    });
    result.innerHTML = `${numCorrect} out of ${qn.length}`;
  }

  function display(n) {
    slides[currentlide].classList.remove('active-slide');
    slides[n].classList.add('active-slide');
    currentlide = n;
    if (currentlide === 0) {
      previousButton.style.display = 'none';
    }
    else {
      previousButton.style.display = 'inline-block';
    }
    if (currentlide === slides.length - 1) {
      nextButton.style.display = 'none';
      submitBtn.style.display = 'inline-block';
    }
    else {
      nextButton.style.display = 'inline-block';
      submitBtn.style.display = 'none';
    }
  }

  function displayNext() {
    display(currentlide + 1);
  }

  function displayPrev() {
    display(currentlide - 1);
  }

  // Variables
  const quiz = document.getElementById('quiz');
  const result = document.getElementById('results');
  const submitBtn = document.getElementById('submit');
  const qn = [
    {
      question: 'Task: The encrypted data is a famous quote, can you crack it?<br><iframe src="/MP-project/Encryption/quiz/aes/qn1.html" width="550px" height="165px"></iframe> <br>',
      answers: {
        a: "Cryptography is typically bypassed, not penetrated.",
        b: "Every secret creates a potential failure point",
        c: "Random numbers should not be generated with a method chosen at random",
        d: "Anyone can create an algorithm they can’t break."
      },
      correctAnswer: "b"
    }, {
      question: 'Task: Encrypt the data stated under the parameter<br><iframe src="/MP-project/Encryption/quiz/aes/qn2.html" width="550px" height="225px"></iframe> <br>',
      answers: {
        a: "K2txQ2MyZXUydlhpL21EUGY2UVdzRWtYejAzMlRqaVdPOGd6U09NZk9HcXlyb0RvS3RZR0RMS05wYkE9PQ==",
        b: "4834324877376b472f704270556864747875725439673d3d",
        c: "634432536d6d796e4a4b423375546b774c79597673773d3d",
        d: "cTg0K20yYWpETjcyZVFsazN1Y2RSL3J2K0ZNbTE1TFJOOXZyazR4N3ZiUDdwT0ZiK3o5VWpFWlBJTGtHdnV0a3RnTW8="
      },
      correctAnswer: "d"
      
    }, {
      question: 'Task: The text format of the encrypted data is Base64.<p style="font-size: 20px;">Encrypted Data (Ciphertext): dE5yQnVUS3RKVk8zazlzSVZDajh3UT09 </p><br><p style="font-size: 15px;">Hint: You would need to use the "Decryption" tab! </p>',
      answers: {
        a: "True",
        b: "False",
      },
      correctAnswer: "a"
    }
  ];

  // Kick things off
  buildQuiz();

  // Pagination
  const previousButton = document.getElementById("previous");
  const nextButton = document.getElementById("next");
  const slides = document.querySelectorAll(".slide");

  let currentlide = 0;
  display(currentlide);

  // Event listeners
  submitBtn.addEventListener('click', showResults);
  previousButton.addEventListener("click", displayPrev);
  nextButton.addEventListener("click", displayNext);
</script>