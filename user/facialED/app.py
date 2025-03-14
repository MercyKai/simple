from flask import Flask, render_template, request

app = Flask(__name__)

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/real', methods=['GET', 'POST'])
def real():
    return render_template('real.html')

if __name__ == "__main__":
    app.run(debug = True, host='127.0.0.1', port=5000)