:
VERSION=5.09-16
REMOTE=false
if [ -d nieuwsbrief ] ; then REMOTE=true ; fi

function add {
    echo -n "ASK, Git add?  []: " ; read TO_ADD
    if [ "${TO_ADD}" != "" ] ; then
        git add ${TO_ADD}
        echo ""
    fi
}
function commit {
    echo "INFO, Git commit"
    DT=$( date +%Y-%m-%d_%H.%M )
    git commit -a -m ${DT}
    echo ""
}

function status {
    echo "INFO, git status"
    git status
}

function pull {
    if [ "${REMOTE}" = "true" ] ; then
        echo "INFO, Git pull"
        git pull
    fi
}

function push {
    if [ "${REMOTE}" = "true" ] ; then
        echo "INFO, Git push"
        git push
    fi
}

function main {
    echo "INFO, $0, Version: ${VERSION}, Remote: ${REMOTE}"

    pull
    
    while [ "${ANS}" != "q" ] ; do
        echo -n "ASK, Git command? (add/commit/status/quit) [status]: " ; read ANS
        case ${ANS} in
        a*) add ;;
        c*) commit ; push ;;
        esac
        status
    done
}

main