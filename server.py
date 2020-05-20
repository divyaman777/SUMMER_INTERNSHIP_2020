from flask import Flask, request
from flask_cors import CORS
import time
app = Flask(__name__)
CORS(app)

@app.route("/", methods=["GET","POST"])
def main():
    u=request.form['val']
    time.sleep(2)
    return(u)

if(__name__=='__main__'):
    app.run()
