# from crypt import methods
# from urllib 
from flask import request 
from flask import Flask,render_template

app=Flask(__name__)

@app.route('/')
def index():
    return render_template('feedback.html')

@app.route('/',methods=['POST'])
def getvalue():
    username=request.form['username']
    email= request.form['email']
    clas =request.form['class'] 
    t1 =request.form['t1']
    t2 =request.form['t2']
    t3 =request.form['t3']
    t4 =request.form['t4']
    t5 =request.form['t5']
    t6 =request.form['t6']
    t7 =request.form['t7']
    t8=request.form['t8']
    w1 =request.form['w1']
    w2 =request.form['w2']
    w3 =request.form['w3']
    w4 =request.form['w4']
    w5 =request.form['w5']
    w6 =request.form['w6']
    w7 =request.form['w7']
    w8 =request.form['w8']
    o1d =request.form['o1d']
    o2d =request.form['o2d']
    o3d =request.form['o3d']
    o4d =request.form['o4d']
    o5d =request.form['o5d']
    o6d =request.form['o6d']
    o7d =request.form['o7d']
    o8d =request.form['o8d']
    o9d =request.form['o9d']
    o10=request.form['o10']
    o11=request.form['o12']
    o12=request.form['o12']
    o13=request.form['o13']
    return render_template('pass.html',o1d=o1d,o2d=o2d,o3d=o3d,o4d=o4d,o5d=o5d,o6d=o6d,o7d=o7d,o8d=o8d,o9d=o9d,o10=o10,o11=o11,o12=o12,o13=o13)

app.run()