<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบทดสอบสำนวนไทย - Thai Idiom Quiz</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }
        
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        
        .header {
            background: linear-gradient(135deg, #ff6b6b, #ee5a52);
            color: white;
            padding: 30px;
            text-align: center;
        }
        
        .header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        
        .header p {
            font-size: 1.1rem;
            opacity: 0.9;
        }
        
        .controls {
            padding: 20px 30px;
            background: #f8f9fa;
            border-bottom: 1px solid #e9ecef;
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
        }
        
        .language-toggle {
            display: flex;
            background: white;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .language-toggle button {
            padding: 10px 20px;
            border: none;
            background: transparent;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .language-toggle button.active {
            background: #667eea;
            color: white;
        }
        
        .set-selector select {
            padding: 10px 15px;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            font-size: 1rem;
            background: white;
        }
        
        .quiz-container {
            padding: 30px;
        }
        
        .progress-bar {
            width: 100%;
            height: 8px;
            background: #e9ecef;
            border-radius: 4px;
            overflow: hidden;
            margin-bottom: 30px;
        }
        
        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #4facfe, #00f2fe);
            border-radius: 4px;
            transition: width 0.3s ease;
        }
        
        .question-card {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 15px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .question-text {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 20px;
            color: #2c3e50;
        }
        
        .options {
            display: grid;
            gap: 15px;
        }
        
        .option {
            padding: 15px 20px;
            border: 2px solid #e9ecef;
            border-radius: 10px;
            background: white;
            cursor: pointer;
            transition: all 0.3s;
            font-size: 1rem;
        }
        
        .option:hover {
            border-color: #667eea;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.2);
        }
        
        .option.selected {
            border-color: #667eea;
            background: #667eea;
            color: white;
        }
        
        .option.correct {
            border-color: #28a745;
            background: #28a745;
            color: white;
        }
        
        .option.wrong {
            border-color: #dc3545;
            background: #dc3545;
            color: white;
        }
        
        .quiz-controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 30px;
        }
        
        .btn {
            padding: 12px 25px;
            border: none;
            border-radius: 25px;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s;
            font-weight: 600;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }
        
        .btn-secondary {
            background: #6c757d;
            color: white;
        }
        
        .btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }
        
        .result-card {
            text-align: center;
            padding: 40px;
            background: #f8f9fa;
            border-radius: 15px;
        }
        
        .score {
            font-size: 3rem;
            font-weight: bold;
            color: #28a745;
            margin-bottom: 20px;
        }
        
        .score-text {
            font-size: 1.2rem;
            margin-bottom: 30px;
            color: #6c757d;
        }
        
        .question-info {
            font-size: 1rem;
            color: #6c757d;
            margin-bottom: 20px;
        }
        
        .hidden {
            display: none;
        }
        
        @media (max-width: 768px) {
            .controls {
                flex-direction: column;
                align-items: stretch;
            }
            
            .header h1 {
                font-size: 2rem;
            }
            
            .quiz-controls {
                flex-direction: column;
                gap: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 id="title">แบบทดสอบสำนวนไทย</h1>
            <p id="subtitle">ทดสอบความรู้สำนวนไทย 50 ข้อ</p>
        </div>
        
        <div class="controls">
            <div class="language-toggle">
                <button id="lang-th" class="active" onclick="setLanguage('th')">ไทย</button>
                <button id="lang-en" onclick="setLanguage('en')">English</button>
            </div>
            
            <div class="set-selector">
                <select id="setSelector" onchange="changeSet()">
                    <option value="0">ชุดที่ 1</option>
                    <option value="1">ชุดที่ 2</option>
                    <option value="2">ชุดที่ 3</option>
                    <option value="3">ชุดที่ 4</option>
                    <option value="4">ชุดที่ 5</option>
                </select>
            </div>
        </div>
        
        <div class="quiz-container">
            <div class="progress-bar">
                <div class="progress-fill" id="progressBar"></div>
            </div>
            
            <div id="questionContainer">
                <div class="question-info">
                    <span id="questionNumber">คำถามที่ 1</span> / <span id="totalQuestions">50</span>
                </div>
                
                <div class="question-card">
                    <div class="question-text" id="questionText"></div>
                    <div class="options" id="optionsContainer"></div>
                </div>
                
                <div class="quiz-controls">
                    <button class="btn btn-secondary" id="prevBtn" onclick="previousQuestion()" disabled>
                        ก่อนหน้า
                    </button>
                    <button class="btn btn-primary" id="nextBtn" onclick="nextQuestion()">
                        ถัดไป
                    </button>
                </div>
            </div>
            
            <div id="resultContainer" class="result-card hidden">
                <div class="score" id="finalScore">0/50</div>
                <div class="score-text" id="scoreText">คะแนนของคุณ</div>
                <button class="btn btn-primary" id="restartBtn" onclick="restartQuiz()">
                    เริ่มใหม่
                </button>
            </div>
        </div>
    </div>

    <script>
        // สำนวนไทยทั้ง 50 ข้อ
        const idioms = [
            { thai: "หนีเสือปะจระเข้", meaning: "หนีภัยอย่างหนึ่งไปเจอภัยอีกอย่างที่ร้ายพอๆ กันหรือร้ายกว่า" },
            { thai: "น้ำขึ้นให้รีบตัก", meaning: "เมื่อมีโอกาสดีควรรีบทำ" },
            { thai: "เข็นครกขึ้นภูเขา", meaning: "ทำงานที่ยากลำบากมาก" },
            { thai: "ชี้โพรงให้กระรอก", meaning: "ชี้ช่องให้คนอื่นทำสิ่งไม่ดี" },
            { thai: "งงเป็นไก่ตาแตก", meaning: "งงมากจนทำอะไรไม่ถูก" },
            { thai: "ขวานผ่าซาก", meaning: "พูดตรงไปตรงมาไม่เกรงใจใคร" },
            { thai: "กงเกวียนกำเกวียน", meaning: "กรรมที่ทำไว้จะย้อนกลับมาหา" },
            { thai: "เอาหูไปนาเอาตาไปไร่", meaning: "แสร้งทำเป็นไม่รู้ไม่เห็น" },
            { thai: "ตีวัวกระทบคราด", meaning: "ทำร้ายอีกคนเพื่อให้กระทบอีกคน" },
            { thai: "มือไม่พายเอาเท้าราน้ำ", meaning: "ไม่ช่วยแล้วยังขัดขวาง" },
            { thai: "ขี่ช้างจับตั๊กแตน", meaning: "ลงทุนหรือเสียแรงมากแต่ได้ผลเล็กน้อย" },
            { thai: "ตีปลาหน้าเขียง", meaning: "ทำร้ายคนที่ไม่มีทางสู้" },
            { thai: "สาวไส้ให้กากิน", meaning: "เปิดเผยความลับหรือเรื่องเสียหายของคนในพวกเดียวกัน" },
            { thai: "ปลาใหญ่กินปลาเล็ก", meaning: "ผู้มีอำนาจรังแกคนอ่อนแอ" },
            { thai: "สร้างวิมานในอากาศ", meaning: "ฝันหรือคิดสิ่งที่เกินจริง" },
            { thai: "น้ำกลิ้งบนใบบอน", meaning: "คนที่ไว้ใจไม่ได้ ไม่จริงจัง" },
            { thai: "จับปลาสองมือ", meaning: "ทำหลายอย่างพร้อมกันจนไม่ได้ดีสักอย่าง" },
            { thai: "ขุดคุ้ยเรื่องเก่า", meaning: "พูดถึงเรื่องเก่าๆ ที่ไม่ดีซ้ำอีก" },
            { thai: "เหยียบเรือสองแคม", meaning: "เข้าข้างทั้งสองฝ่ายโดยไม่เลือกฝ่าย" },
            { thai: "วัวหายล้อมคอก", meaning: "แก้ปัญหาช้าเกินไป" },
            { thai: "หมากัดอย่ากัดตอบ", meaning: "อย่าตอบโต้คนที่ต่ำกว่า" },
            { thai: "ปลาหมอตายเพราะปาก", meaning: "พูดมากจนเป็นเหตุให้เดือดร้อน" },
            { thai: "ไฟลนก้น", meaning: "เร่งรีบเพราะกลัวว่าจะไม่ทัน" },
            { thai: "มือถือสากปากถือศีล", meaning: "แสร้งทำเป็นดีแต่แท้จริงกลับทำชั่ว" },
            { thai: "หวานเป็นลม ขมเป็นยา", meaning: "คำพูดที่เพราะมักไม่เตือนใจ แต่คำพูดขมๆ มักเตือนให้คิด" },
            { thai: "กระต่ายตื่นตูม", meaning: "ตกใจเกินเหตุ" },
            { thai: "เห็นช้างขี้ ขี้ตามช้าง", meaning: "เลียนแบบคนอื่นทั้งที่ไม่มีกำลังพอ" },
            { thai: "กระดี่ได้น้ำ", meaning: "ดีใจจนออกนอกหน้า" },
            { thai: "น้ำลดตอผุด", meaning: "ความลับจะปรากฏเมื่อถึงเวลา" },
            { thai: "ปากว่าตาขยิบ", meaning: "พูดอย่างหนึ่งแต่ทำอีกอย่าง" },
            { thai: "ยิงปืนนัดเดียวได้นกสองตัว", meaning: "ทำสิ่งเดียวได้ผลสองอย่าง" },
            { thai: "ตำน้ำพริกละลายแม่น้ำ", meaning: "ใช้ทรัพยากรไปโดยเปล่าประโยชน์" },
            { thai: "ปิดทองหลังพระ", meaning: "ทำความดีแต่ไม่มีใครเห็น" },
            { thai: "รำไม่ดีโทษปี่โทษกลอง", meaning: "โทษผู้อื่นแทนที่จะโทษตัวเอง" },
            { thai: "เอาเนื้อไปแลกกระดูก", meaning: "เอาของดีไปแลกของที่ด้อยกว่า" },
            { thai: "ผักชีโรยหน้า", meaning: "ทำให้ดูดีแต่ภายนอกชั่วคราว" },
            { thai: "ว่าแต่เขาอิเหนาเป็นเอง", meaning: "ตำหนิคนอื่นในเรื่องที่ตัวเองก็ทำ" },
            { thai: "คนล้มอย่าข้าม", meaning: "อย่าซ้ำเติมคนที่ตกต่ำ" },
            { thai: "เอาใจเขามาใส่ใจเรา", meaning: "คิดถึงใจผู้อื่นก่อนจะตัดสิน" },
            { thai: "หมาเห่าเครื่องบิน", meaning: "คนที่พูดหรือวิจารณ์ไปโดยเปล่าประโยชน์" },
            { thai: "ไก่เห็นตีนงู งูเห็นนมไก่", meaning: "ต่างฝ่ายต่างมีความลับที่รู้กัน" },
            { thai: "กระต่ายหมายจันทร์", meaning: "หมายปองสิ่งที่เกินเอื้อม" },
            { thai: "ขิงก็รา ข่าก็แรง", meaning: "ต่างฝ่ายต่างไม่ยอมกัน" },
            { thai: "น้ำท่วมปาก", meaning: "รู้แต่ไม่สามารถพูดได้" },
            { thai: "สีซอให้ควายฟัง", meaning: "พูดกับคนที่ไม่เข้าใจหรือไม่สนใจ" },
            { thai: "อาบเหงื่อต่างน้ำ", meaning: "ทำงานอย่างหนัก" },
            { thai: "งมเข็มในมหาสมุทร", meaning: "หาอะไรที่ยากมาก" },
            { thai: "ไก่รองบ่อน", meaning: "คนที่มีโอกาสแพ้มากกว่าในสถานการณ์นั้น" },
            { thai: "เสียน้อยเสียยาก เสียมากเสียง่าย", meaning: "ไม่ยอมเสียของเล็กน้อย จนต้องเสียมากในภายหลัง" },
            { thai: "ลูบหน้าปะจมูก", meaning: "ไม่กล้าทำเพราะเกรงใจคนใกล้ชิดหรือพวกเดียวกัน" }
        ];

        // ข้อมูลภาษา
        const translations = {
            th: {
                title: "แบบทดสอบสำนวนไทย",
                subtitle: "ทดสอบความรู้สำนวนไทย 50 ข้อ",
                questionOf: "คำถามที่",
                previous: "ก่อนหน้า",
                next: "ถัดไป",
                restart: "เริ่มใหม่",
                yourScore: "คะแนนของคุณ",
                setOptions: ["ชุดที่ 1", "ชุดที่ 2", "ชุดที่ 3", "ชุดที่ 4", "ชุดที่ 5"],
                questionPrompt: "สำนวน \"[idiom]\" มีความหมายว่าอย่างไร?"
            },
            en: {
                title: "Thai Idiom Quiz",
                subtitle: "Test your knowledge of 50 Thai idioms",
                questionOf: "Question",
                previous: "Previous",
                next: "Next",
                restart: "Restart",
                yourScore: "Your Score",
                setOptions: ["Set 1", "Set 2", "Set 3", "Set 4", "Set 5"],
                questionPrompt: "What does the Thai idiom \"[idiom]\" mean?"
            }
        };

        // ตัวแปรสำหรับเก็บสถานะ
        let currentLanguage = 'th';
        let currentSet = 0;
        let currentQuestionIndex = 0;
        let score = 0;
        let selectedAnswer = null;
        let currentQuestions = [];
        
        // สุ่มชุดคำถาม 50 ข้อ
        function generateQuestionSet() {
            const shuffled = [...idioms].sort(() => 0.5 - Math.random());
            return shuffled.map(idiom => {
                const correct = idiom.meaning;
                const wrongAnswers = idioms
                    .filter(item => item.meaning !== correct)
                    .sort(() => 0.5 - Math.random())
                    .slice(0, 3)
                    .map(item => item.meaning);
                
                const options = [correct, ...wrongAnswers].sort(() => 0.5 - Math.random());
                
                return {
                    idiom: idiom.thai,
                    correct: correct,
                    options: options
                };
            });
        }

        // สร้าง 5 ชุดคำถาม
        const questionSets = Array.from({length: 5}, () => generateQuestionSet());

        function setLanguage(lang) {
            currentLanguage = lang;
            document.getElementById('lang-th').classList.toggle('active', lang === 'th');
            document.getElementById('lang-en').classList.toggle('active', lang === 'en');
            updateUI();
        }

        function updateUI() {
            const t = translations[currentLanguage];
            document.getElementById('title').textContent = t.title;
            document.getElementById('subtitle').textContent = t.subtitle;
            document.getElementById('prevBtn').textContent = t.previous;
            document.getElementById('nextBtn').textContent = t.next;
            document.getElementById('restartBtn').textContent = t.restart;
            document.getElementById('scoreText').textContent = t.yourScore;
            
            // อัปเดต selector
            const selector = document.getElementById('setSelector');
            for(let i = 0; i < 5; i++) {
                selector.options[i].text = t.setOptions[i];
            }
            
            // อัปเดตคำถามปัจจุบัน
            if (!document.getElementById('resultContainer').classList.contains('hidden')) {
                return;
            }
            updateQuestion();
        }

        function changeSet() {
            currentSet = parseInt(document.getElementById('setSelector').value);
            currentQuestionIndex = 0;
            score = 0;
            selectedAnswer = null;
            currentQuestions = questionSets[currentSet];
            document.getElementById('resultContainer').classList.add('hidden');
            document.getElementById('questionContainer').classList.remove('hidden');
            updateQuestion();
        }

        function updateQuestion() {
            const question = currentQuestions[currentQuestionIndex];
            const t = translations[currentLanguage];
            
            document.getElementById('questionNumber').textContent = 
                `${t.questionOf} ${currentQuestionIndex + 1}`;
            document.getElementById('totalQuestions').textContent = '50';
            
            document.getElementById('questionText').textContent = 
                t.questionPrompt.replace('[idiom]', question.idiom);
            
            const optionsContainer = document.getElementById('optionsContainer');
            optionsContainer.innerHTML = '';
            
            question.options.forEach((option, index) => {
                const optionElement = document.createElement('div');
                optionElement.className = 'option';
                optionElement.textContent = option;
                optionElement.onclick = () => selectAnswer(index, option);
                optionsContainer.appendChild(optionElement);
            });
            
            // อัปเดต progress bar
            const progress = ((currentQuestionIndex + 1) / 50) * 100;
            document.getElementById('progressBar').style.width = `${progress}%`;
            
            // อัปเดตปุ่ม
            document.getElementById('prevBtn').disabled = currentQuestionIndex === 0;
            document.getElementById('nextBtn').textContent = 
                currentQuestionIndex === 49 ? 'ดูผล' : t.next;
            
            selectedAnswer = null;
        }

        function selectAnswer(index, answer) {
            selectedAnswer = answer;
            
            // รีเซ็ตสีตัวเลือก
            document.querySelectorAll('.option').forEach(option => {
                option.classList.remove('selected', 'correct', 'wrong');
            });
            
            // เลือกตัวเลือก
            document.querySelectorAll('.option')[index].classList.add('selected');
        }

        function nextQuestion() {
            if (selectedAnswer === null) {
                alert(currentLanguage === 'th' ? 'กรุณาเลือกคำตอบ' : 'Please select an answer');
                return;
            }
            
            // ตรวจสอบคำตอบ
            const question = currentQuestions[currentQuestionIndex];
            if (selectedAnswer === question.correct) {
                score++;
            }
            
            if (currentQuestionIndex === 49) {
                showResult();
            } else {
                currentQuestionIndex++;
                updateQuestion();
            }
        }

        function previousQuestion() {
            if (currentQuestionIndex > 0) {
                currentQuestionIndex--;
                updateQuestion();
            }
        }

        function showResult() {
            document.getElementById('questionContainer').classList.add('hidden');
            document.getElementById('resultContainer').classList.remove('hidden');
            document.getElementById('finalScore').textContent = `${score}/50`;
        }

        function restartQuiz() {
            currentQuestionIndex = 0;
            score = 0;
            selectedAnswer = null;
            currentQuestions = questionSets[currentSet];
            document.getElementById('resultContainer').classList.add('hidden');
            document.getElementById('questionContainer').classList.remove('hidden');
            updateQuestion();
        }

        // เริ่มต้น
        currentQuestions = questionSets[0];
        updateQuestion();
    </script>
</body>
</html>