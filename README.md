# createExperiment
This creates a new jsPsych experiment using the `init.sh` script.

The script will prompt you to select jsPsych version 6 or version 7. It will then add the jsPsych version wrapper you select as a submodule.

Then, it will ask you to rename the script.

Lastly, it create the directory structure for an experiment template and clean up.

### Clone repository
```
git clone git@github.com:belieflab/createExperiment.git
```
### Change directory
```
cd createExperiment
```

### Make init.sh executable
```
chmod +x init.sh
```

### Run init.sh
```
./init.sh
```

#### Choose jsPsych version

> Initialized empty Git repository in ~/createExperiment/.git/
> 
> Would you like to use jsPsych version 6 or version 7? (Enter 6 or 7):

#### Change Name

> jsPsych Wrapper 6 installed successfully!
> 
> What would you like to name your new experiment? (Please use camelCase):

### Link GitHub repository to your new experiment
After creating a blank repo on GitHub with the same name, execute:
```
git add *
git add .gitignore
git commit -m "fork from createExperiment"
git branch -M main
git remote add origin git:github.com/belieflab/nameOfYourExperiment
git push -u origin main
```
