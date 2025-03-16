from flask import Flask, render_template, request, Response
#Get the camera class from camera.py
from camera import Video

app = Flask(__name__)
#Define the main route
@app.route('/',endpoint='index')
def main():
    return render_template('index.html')
#The camrea generator function
def gen(camera):
    while True:
        frame=camera.get_frame()
        yield(b'--frame\r\n'
              b'Content-Type: image/jpeg\r\n\r\n' + frame + b'\r\n\r\n')
#Define the video route
@app.route('/video')
def video():
    return Response(gen(Video()), mimetype='multipart/x-mixed-replace; boundary=frame')
#Run the app
if __name__ == "__main__":
    app.run(host='0.0.0.0', port=5000,debug = True)