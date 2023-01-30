from flask import Flask, render_template

app = Flask('app')

@app.route('/log_in')
def login():
  return render_template("log_in.html")
  
@app.route('/')
def home_page():
  return render_template("home_page.html")

@app.route('/cars')
def cars():
  return render_template("cars.html")
  
@app.route('/services')
def services():
  return render_template("services.html")

@app.route('/your_reservations')
def your_reservations():
  return render_template("your_reservations.html")

@app.route('/contacts')
def contacts():
  return render_template("contacts.html")

@app.route('/rent')
def rent():
  return render_template("rent.html")
  
app.run(host='0.0.0.0', port=8080)