

# This is the point release for libevent.  It shouldn't include any
# a/b/c/d/e notations.
RELEASE = 1.4

# This is the version info for the libevent binary API.  It has three
# numbers:
#   Current  -- the number of the binary API that we're implementing
#   Revision -- which iteration of the implementation of the binary
#               API are we supplying?
#   Age      -- How many previous binary API versions do we also
#               support?
#
# If we release a new version that does not change the binary API,
# increment Revision.
#
# If we release a new version that changes the binary API, but does
# not break programs compiled against the old binary API, increment
# Current and Age.  Set Revision to 0, since this is the first
# implementation of the new API.
#
# Otherwise, we're changing the binary API and breaking bakward
# compatibility with old binaries.  Increment Current.  Set Age to 0,
# since we're backward compatible with no previous APIs.  Set Revision
# to 0 too.

# History:
#  Libevent 1.4.1 was 2:0:0
#  Libevent 1.4.2 should be 3:0:0
#  Libevent 1.4.5 is 3:0:1 (we forgot to increment in the past)
VERSION_INFO = 3:2:1

noinst_LIBRARIES = libevent.a



BUILT_SOURCES = event-config.h

event-config.h: config.h
	echo '/* event-config.h' > $@
	echo ' * Generated by autoconf; post-processed by libevent.' >> $@
	echo ' * Do not edit this file.' >> $@
	echo ' * Do not rely on macros in this file existing in later versions.'>> $@
	echo ' */' >> $@
	echo '#ifndef _EVENT_CONFIG_H_' >> $@
	echo '#define _EVENT_CONFIG_H_' >> $@

	sed -e 's/#define /#define _EVENT_/' \
	    -e 's/#undef /#undef _EVENT_/' \
	    -e 's/#ifndef /#ifndef _EVENT_/' < config.h >> $@
	echo "#endif" >> $@

CORE_SRC = event.c log.c evutil.c http.c buffer.c evbuffer.c strlcpy.c $(SYS_SRC)

libevent_a_SOURCES = $(CORE_SRC) $(EXTRA_SRC)
libevent_a_DEPENDENCIES = $(LIBOBJS)
libevent_a_LIBADD = $(LIBOBJS)

include_HEADERS = event.h evutil.h event-config.h

INCLUDES = -I$(srcdir)/compat $(SYS_INCLUDES)
