from matplotlib import pyplot as plt
import pandas as pd
df=pd.read_csv("C:/Users/Admin/Desktop/rosh/iris.csv")
fig,ax = plt.subplots(1,1)
color={'Setosa':"red", 'Versicolor':"green",'Virginica':"blue"}
grouped=df.groupby('species')
for key, group in grouped:
    group.plot(ax=ax,kind='scatter', x='petal.length', y='petal.width', label=key, color=color[key])
               
ax.set_title("scatter")
ax.set_xlabel("petal.length")
ax.set_ylabel=("petal.width")
plt.show()


