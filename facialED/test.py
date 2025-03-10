import cv2
import numpy as np
from tensorflow.keras.models import load_model

model=load_model("new_model.h5")
face_cascade = cv2.CascadeClassifier(cv2.data.haarcascades+'haarcascade_frontalface_default.xml')
emotions = {0: "Angry", 1: "Disgust", 2: "Fear", 3: "Happy", 4: "Neutral", 5: "Sad", 6: "Surprise"}
cap=cv2.imread(r"img\five.jpg")
gray =cv2.cvtColor(cap, cv2.COLOR_BGR2GRAY)
faces=face_cascade.detectMultiScale(gray, scaleFactor=1.3, minNeighbors=3)
for x,y, w, h in faces:
    sub_face = gray[y:y+h, x:x+w]
    resized = cv2.resize(sub_face, (48, 48))
    normalize = resized/255.0
    reshaped = np.reshape(normalize, (1, 48, 48, 1))
    result = model.predict(reshaped)
    label = np.argmax(result, axis=1)[0]
    print(label)
    cv2.rectangle(cap, (x, y), (x+w, y+h), (0, 255, 0), 2)
    cv2.putText(cap, emotions[label], (x, y -10), cv2.FONT_HERSHEY_SIMPLEX, 0.7, (0, 255, 0), 2, cv2.LINE_AA)
cv2.imshow('Emotion Recognition',cap)
cv2.waitKey(0)
cv2.destroyAllWindows()