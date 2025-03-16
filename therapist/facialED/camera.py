import cv2
import numpy as np
from tensorflow.keras.models import load_model
#Load the pre-trained model
model=load_model("new_model.h5")
#Load Haar cascade for face detection
face_cascade=cv2.CascadeClassifier(cv2.data.haarcascades + 'haarcascade_frontalface_default.xml')
#Emotion labels
emotions={0: "Angry",1:"Disgust",2: "Fear", 3: "Happy", 4:"Neutral",5: "Sad",6: "Surprise"}
class Video(object):
    def __init__(self):
        self.video=cv2.VideoCapture(0)

    def __del__(self):
        self.video.release()

    def get_frame(self):
        self.video.read()
        ret, frame=self.video.read()
        if not ret:
            return None

        gray=cv2.cvtColor(frame,cv2.COLOR_BGR2GRAY)
        faces=face_cascade.detectMultiScale(gray, 1.3, 5)
        if len(faces)>0:
            x, y, w,h = faces[0]
            #Extract face ROI
            face_roi=gray[y:y + h,x:x + w]
            resized=cv2.resize(face_roi,(48, 48))
            normalized=resized / 255.0
            reshaped=np.reshape(normalized, (1,48,48,1))
            #Predict emotion
            result=model.predict(reshaped)
            label=np.argmax(result)
            emotion_text=emotions[label]
            #Draw bounding box and label
            cv2.rectangle(frame, (x, y),(x + w,y + h),(0, 255, 0), 2)
            cv2.putText(frame,emotion_text,(x, y - 10), cv2.FONT_HERSHEY_SIMPLEX, 0.7, (0,255,0),2,cv2.LINE_AA)
        #Encode frame as JPEG
        ret,jpg=cv2.imencode('.jpg', frame)
        return jpg.tobytes()