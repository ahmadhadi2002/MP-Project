<link rel="stylesheet" type="text/css" href="../shared_css/style(q).css">

<div class="quiz_all">
  <div class="quiz-container" style="height: 300px;">
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
      question: 'Is One-time Pad (OTP) is a truly uncrackable encryption technique',
      answers: {
        a: "True",
        b: "False"
      },
      correctAnswer: "a"
    }, {
      question: 'Can the key for OTP be reused?',
      answers: {
        a: "Yes",
        b: "No"
      },
      correctAnswer: "a"
      
    }, {
      question: 'Task: Encrypt the data stated under the parameter<br><iframe src="/MP-project/Encryption/quiz/otp/qn3.html" width="250px" height="140px"></iframe> <br>',
      answers: {
        a: "AAAAAAAAAAAAAAAAAAA=",
        b: "ABAAABBACCAAAVAAADA=",
        c: "CSciACwQX1UXGSIWVyI=",
        d: "VDNUEQoPFyQhNgEEPTQ=",
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