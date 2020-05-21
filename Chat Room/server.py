from flask import Flask, request, redirect, url_for
from flask_cors import CORS
import time
app = Flask(__name__)
CORS(app)
@app.route('/<name>')
def success(name):
	return "Welcome %s" %name
@app.route("/", methods=["GET","POST"])
def main():
	if request.method == 'POST':
		data = request.form['name']
		return redirect(url_for('success', name=data))

if(__name__=='__main__'):
    app.run(debug = False)
