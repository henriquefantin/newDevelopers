var resultadoExec;

var console = (function (oldConsole) {
    return {
        formatArgsOutput: function (arg) {
            let outputArgMessage;

            // Deal with different data types
            switch (this.getType(arg)) {
                case "string":
                    outputArgMessage = `"${arg}"`;
                    break;
                case "object":
                    outputArgMessage = `Object ${JSON.stringify(arg)}`;
                    break;
                case "array":
                    outputArgMessage = `Array ${JSON.stringify(arg)}`;
                    break;
                default:
                    outputArgMessage = arg;
                    break;
            }

            return outputArgMessage;
        },
        getType: function (arg) {
            if (typeof arg === "string") return "string";
            if (typeof arg === "boolean") return "boolean";
            if (typeof arg === "function") return "function";
            if (typeof arg === "number") return "number";
            if (typeof arg === "undefined") return "undefined";
            if (typeof arg === "object" && !Array.isArray(arg)) return "object";
            if (typeof arg === "object" && Array.isArray(arg)) return "array";
        },
        logMultipleArguments: function (arguments) {
            let currentLog = "";

            // Deal with multiple arguments
            arguments.forEach(arg => {
                currentLog += this.formatArgsOutput(arg) + " ";
            });

            oldConsole.log.apply(oldConsole, arguments);

            consoleMessages.push({
                message: currentLog,
                class: `log log--default`
            });

            oldConsole.log(consoleMessages);
        },
        logSingleArgument: function (logItem) {
            oldConsole.log(logItem);
            consoleMessages.push({
                message: this.formatArgsOutput(logItem),
                class: `log log--${this.getType(logItem)}`
            });

            resultadoExec = logItem;

            oldConsole.log(consoleMessages);
        },
        printResultado: function (logItem) {
            oldConsole.log(logItem);
            consoleMessagesResultado.push({
                message: this.formatArgsOutput(logItem),
                class: `log log--${this.getType(logItem)}`
            });

            oldConsole.log(consoleMessagesResultado);
        },
        log: function (text) {
            let argsArray = Array.from(arguments);
            return argsArray.length !== 1 ? this.logMultipleArguments(argsArray) : this.logSingleArgument(text);
        },
        info: function (text) {
            oldConsole.info(text);
        },
        warn: function (text) {
            oldConsole.warn(text);
        },
        error: function (err) {
            oldConsole.error(err);
            consoleMessages.push({
                message: `${err.name}: ${err.message}`,
                class: "log log--error"
            });
        }
    }
})(window.console);

// Retrieve Elements
const consoleLogList = document.querySelector('.editor__console-logs');
const executeCodeBtn = document.querySelector('.editor__run');
const resetCodeBtn = document.querySelector('.editor__reset');

// Setup Ace
var codeEditor = ace.edit("editorCode");
var defaultCode = '';
var consoleMessages = [];
var consoleMessagesResultado = [];

var editorLib = {
    clearConsoleScreen() {
        consoleMessages.length = 0;

        // Remove all elements in the log list
        while (consoleLogList.firstChild) {
            consoleLogList.removeChild(consoleLogList.firstChild);
        }
    },
    printToConsole() {
        consoleMessages.forEach(log => {
            const newLogItem = document.createElement('li');
            const newLogText = document.createElement('pre');

            newLogText.className = log.class;
            newLogText.textContent = `> ${log.message}`;

            newLogItem.appendChild(newLogText);

            consoleLogList.appendChild(newLogItem);
        })
    },
    statusResultado() {
        consoleMessagesResultado.forEach(log => {
            const newLogResultado = document.createElement('li');
            const newLogTextResultado = document.createElement('pre');

            newLogTextResultado.className = log.class;
            newLogTextResultado.textContent = `> ${log.message}`;

            newLogResultado.appendChild(newLogTextResultado);

            consoleLogList.appendChild(newLogResultado);
        })
        consoleMessagesResultado = [];
    },
    init() {
        // Configure Ace

        // Theme
        codeEditor.setTheme("ace/theme/dracula");

        // Set language
        codeEditor.session.setMode("ace/mode/javascript");

        // Set Options
        codeEditor.setOptions({
            fontFamily: 'Inconsolata',
            fontSize: '12pt',
            enableBasicAutocompletion: true,
            enableLiveAutocompletion: true,
        });

        // Set Default Code
        codeEditor.setValue(defaultCode);
    }
}

// Events
executeCodeBtn.addEventListener('click', () => {
    // Clear console messages
    editorLib.clearConsoleScreen();

    // Get input from the code editor
    const userCode = codeEditor.getValue();

    // Run the user code
    try {
        new Function(userCode)();
    } catch (err) {
        console.error(err);
    }

    // Print to the console
    editorLib.printToConsole();
});

resetCodeBtn.addEventListener('click', () => {
    // Clear console messages
    editorLib.clearConsoleScreen();
})

editorLib.init();