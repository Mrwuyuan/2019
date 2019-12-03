<?php
//1.能不能说一下git fetch和git pull命令之间的区别？
//答：
//简单来说：git fetch branch是把名为branch的远程分支拉取到本地；而git pull branch是在fetch的基础上，把branch分支与当前分支进行merge；因此pull = fetch + merge。

//2.使用过git merge和git rebase吗？它们之间有什么区别？
//答：
// 简单的说，git merge和git rebase都是合并分支的命令。
// git merge branch会把branch分支的差异内容pull到本地，然后与本地分支的内容一并形成一个committer对象提交到主分支上，合并后的分支与主分支一致；
// git rebase branch会把branch分支优先合并到主分支，然后把本地分支的commit放到主分支后面，合并后的分支就好像从合并后主分支又拉了一个分支一样，本地分支本身不会保留提交历史。

//3.nihaoaaajhaksdjlkasjdlkj