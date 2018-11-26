# Contributing to the project

### First Steps
When the repository is cloned, by default you will be in the master branch. Please make sure you switch to anoter existing branch or create a new branch using the following command:
git checkout -b "nameOfYourBranch"

And in case of swiching the branch, using the following command:
git checkout nameOfExisitingBranch

### What's Next?
After you have done your part, push your changes to the repo in your currently active branch.
If you think the task assigned to you is completed and ready to be deployed, create a pull request of your currently active branch going into master.



### Using Git from CLI - Common Commands

* git clone linkOfRepository => will clone the repo with repo name as the folder name
* git branch => displays all the local branches, to display all the remote branches as well using '-a' flag at the end
* git add fileName => this will submit the named file towards your next commit. If you want to submit all changed files, replace '.' with fileName
* git reset => all submitted files will be retracted from your next commit
* git commit -m "your message" => after you have added all the desired files, run this command with a message which defines exactly what changes you made
* git push => push your changes to the repo
